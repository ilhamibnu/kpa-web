<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthContoller extends Controller
{
    public function indexLogin()
    {
        return view('landing.auth.login');
    }

    public function indexRegister()
    {
        return view('landing.auth.register');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password harus diisi'

        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/')->with('login', 'Login berhasil');
        }

        return redirect()->back()->with('gagallogin', 'Email atau password salah');
    }

    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'repassword' => 'required|same:password'
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password harus diisi',
            'repassword.required' => 'Konfirmasi password harus diisi',
            'repassword.same' => 'Konfirmasi password tidak sama dengan password'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 'user';
        $user->save();

        return redirect('/user/login')->with('register', 'Register berhasil');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('logout', 'Logout berhasil');
    }

    public function profil()
    {
        return view('landing.pages.profil');
    }

    public function updateprofil(Request $request)
    {
        if ($request->password != null) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . auth()->user()->id,
                'password' => 'required',
                'repassword' => 'required|same:password'
            ], [
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Email tidak valid',
                'email.unique' => 'Email sudah digunakan',
                'password.required' => 'Password harus diisi',
                'repassword.required' => 'Konfirmasi password harus diisi',
                'repassword.same' => 'Konfirmasi password tidak sama dengan password'
            ]);
        } else {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . auth()->user()->id,
            ], [
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Email tidak valid',
                'email.unique' => 'Email sudah digunakan',
            ]);
        }

        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password != null) {
            $user->password = bcrypt($request->password);
        }
        $user->update();

        return redirect('/user/profil')->with('update', 'Update profil berhasil');
    }


    public function linkresetpassword()
    {
        return view('landing.auth.linkresetpassword');
    }

    public function changepassword($code)
    {
        $user = User::where('code', $code)->where('status_code', 'aktif')->where('role', 'user')->first();
        if ($user) {
            return view('landing.auth.gantipassword', [
                'user' => $user
            ]);
        } else {
            return redirect('/')->with('linkkadaluarsa', 'Reset Password Gagal');
        }
    }

    public function changepasswordpost(Request $request)
    {
        $user = User::where('code', $request->code)->where('status_code', 'aktif')->where('role', 'user')->first();
        $request->validate([
            'password' => 'required',
            'repassword' => 'required|same:password',
        ], [
            'password.required' => 'Password tidak boleh kosong',
            'repassword.required' => 'Re-Password tidak boleh kosong',
            'repassword.same' => 'Re-Password tidak sama dengan Password',
        ]);

        $user->password = bcrypt($request->password);
        $user->code = null;
        $user->status_code = "tidak_aktif";
        $user->save();

        return redirect('/')->with('resetpasswordberhasil', 'Reset Password Berhasil');
    }

    public function sendlinkresetpassword(Request $request)
    {
        $request->validate([
            'email' => ['required'],
        ], [
            'email.required' => 'Email tidak boleh kosong',
        ]);

        $user = User::where('email', $request->email)->where('role', 'user')->first();

        if ($user) {
            try {
                $mail = new PHPMailer(true);

                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'mail.semnasjkgsby.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'admin@semnasjkgsby.com';                     //SMTP username
                $mail->Password   = '%CQw$!a@@#%U';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                              //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('admin@semnasjkgsby.com', 'Admin KPA');
                $mail->addAddress($request->email);     //Add a recipient

                $Code = substr((str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ")), 0, 10);

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Password Reset';
                $mail->Body    = 'To reset your password, please click the link below:<br><br><a href="http://127.0.0.1:8000/user/reset-password/' . $Code . '">Reset Password</a>';
                $updatecode = User::where('email', '=', $request->email)->first();
                $updatecode->code = $Code;
                $updatecode->status_code = 'aktif';
                $updatecode->save();

                $mail->send();
            } catch (Exception $e) {
            }
        } else {
            return redirect('/user/link-reset-password')->with('emailtidakada', 'Reset Password Gagal');
        }
    }
}

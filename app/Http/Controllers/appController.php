<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Mail;
use Validator;
use App\akun;
use App\testimonial;
use App\jenisKamar;
use App\kamar;
use App\tamu;
use App\reservasi;
use DB;
use Hash;

class appController extends Controller
{
    public function index(request $request)
   {
      $datas = testimonial::select('*')->join('tb_tamu','tb_tamu.id_tamu','=','tb_testimonial.id_tamu')->orderBy('id_testi','DESC')->paginate(7);
      $datas2 =jenisKamar::select('*')->orderBy('id_jenis','DESC')->paginate(8);        
      $datas3 = kamar::select('*')->join('tb_jenis_kamar','tb_kamar.id_jenis','=','tb_jenis_kamar.id_jenis')->where('status','tersedia')->orderBy('id_kamar','DESC')->paginate(6);

      $s =$request->session()->get('username-cj');
      if(isset($s)){
        $tamu = tamu::where('email',$s)->first();        
        return view('home')->with('datas',$datas)->with('datas2',$datas2)->with('datas3',$datas3)->with('userData',$tamu)->with('request',$request);
      }else{
        return view('home')->with('datas',$datas)->with('datas2',$datas2)->with('datas3',$datas3)->with('request',$request);
      }
   }
   public function pilihHotel(request $request)
   {
      if(empty($request['banyak'])){
        return redirect()->to('/');
      }else{
        $ambil = $request['banyak'];
        $ambil2 = $request['kamar'];
        $datas = testimonial::select('*')->join('tb_tamu','tb_tamu.id_tamu','=','tb_testimonial.id_tamu')->orderBy('id_testi','DESC')->paginate(7);
        $datas2 =jenisKamar::select('*')->orderBy('id_jenis','DESC')->paginate(8);
        $datas3 = kamar::select('*')->join('tb_jenis_kamar','tb_kamar.id_jenis','=','tb_jenis_kamar.id_jenis')->where('banyak_tamu','>=',$ambil)->where('tb_kamar.id_jenis',$ambil2)->orderBy('id_kamar','DESC')->paginate(6);        
        $s =$request->session()->get('username-cj');
        if(isset($s)){
          $tamu = tamu::where('email',$s)->first();        
          return view('pilih-hotel')->with('datas',$datas)->with('datas2',$datas2)->with('datas3',$datas3)->with('userData',$tamu)->with('request',$request);
        }else{
          return view('pilih-hotel')->with('datas',$datas)->with('datas2',$datas2)->with('datas3',$datas3)->with('request',$request);
        }
      }
   }
   public function isi()
   {
      return redirect()->to('/');
   }
   public function cekKamar(request $request)
   {
      $checkin=new \DateTime($request['checkin']);
      $checkout=new \DateTime($request['checkout']);
      $jumlah = $checkin->diff($checkout);
      $jointamu = DB::raw("(tb_booking INNER JOIN tb_tamu ON tb_booking.id_tamu=tb_tamu.id_tamu)");
      $joinkamar = DB::raw("(tb_kamar INNER JOIN tb_jenis_kamar ON tb_jenis_kamar.id_jenis=tb_kamar.id_jenis)");
      $reservasi = reservasi::select('*')
                    ->join($jointamu,'tb_booking.kode_booking','=','tb_booking_kamar.kode_booking')
                    ->join($joinkamar,'tb_kamar.id_kamar','=','tb_booking_kamar.id_kamar')
                    ->where('tb_kamar.id_kamar',$request['id'])
                    ->wherebetween('tb_booking.tgl_checkin',[$request['checkin'],$request['checkout']])
                    ->orWherebetween('tb_booking.tgl_checkout',[$request['checkin'],$request['checkout']])
                    ->orWhere('tb_booking.tgl_checkin','<=',$request['checkin'])
                    ->where('tb_booking.tgl_checkout','>=',$request['checkout'])
                    ->orderBy('tgl_booking','DESC')->paginate(6);
      if(empty($request->session()->get('username-cj'))){
            return view('isi-data')->with('request',$request)->with('jumlah',$jumlah);
      }else{
            return redirect()->to('isi-data')->with('request',$request)->with('jumlah',$jumlah);

      }
    }
   public function isiData(request $request)
   {
      $checkin=new \DateTime($request['checkin']);
      $checkout=new \DateTime($request['checkout']);
      $jumlah = $checkin->diff($checkout);
      if(empty($request->session()->get('username-cj'))){
            return view('isi-data')->with('request',$request)->with('jumlah',$jumlah);
      }else{
            return redirect()->to('isi-data')->with('request',$request)->with('jumlah',$jumlah);

      }
    }
   public function isiDataStore(request $request)
    {
         $datas = tamu::orderBy('id_tamu','DESC')->first();
         $tambah = new akun();
         $tambah->email = $request['email'];
         $tambah->password = $request['pass'];
         $tambah->save();
         $tambah = new tamu();
         $tambah->id_tamu = $datas['id_tamu']+1;
         $tambah->nama_tamu = $request['namaDepan']." ".$request['namaBelakang'];
         $tambah->alamat = $request['alamat'];
         $tambah->no_tlp = $request['nohp'];
         $tambah->email = $request['email'];
         $tambah->no_identitas = $request['noid'];
         $tambah->save();
         $request->session()->put('username-cj', $request['email']);
      return view('isi-data-store')->with('request',$request);
   }
   public function reservasiKamar(request $request)
   {
       return view('reservasi-kamar')->with('request',$request);
   }
   public function rooms(request $request)
   {
      $s =$request->session()->get('username-cj');
      if(isset($s)){
        $tamu = tamu::where('email',$s)->first();
        return view('rooms')->with('userData',$tamu)->with('request',$request);
      }else{
        return view('rooms')->with('request',$request);
      }
   }
   public function resto(request $request)
   {
      $s =$request->session()->get('username-cj');
      if(isset($s)){
        $tamu = tamu::where('email',$s)->first();
        return view('resto')->with('userData',$tamu)->with('request',$request);
      }else{
        return view('resto')->with('request',$request);
      }
   }
   public function about(request $request)
   {
      $s =$request->session()->get('username-cj');
      if(isset($s)){
        $tamu = tamu::where('email',$s)->first();
        return view('about')->with('userData',$tamu)->with('request',$request);
      }else{
        return view('about')->with('request',$request);
      }
   }
//=============================================Akun User============================================
   public function accountUser(request $request)
   {
      $s =$request->session()->get('username-cj');
      if(!isset($s)){
        return back();
      }else{
        $tamu = tamu::where('email',$s)->first();        
        $jointamu = DB::raw("(tb_booking INNER JOIN tb_tamu ON tb_booking.id_tamu=tb_tamu.id_tamu)");
        $joinkamar = DB::raw("(tb_kamar INNER JOIN tb_jenis_kamar ON tb_jenis_kamar.id_jenis=tb_kamar.id_jenis)");
        $reservasi = reservasi::select('*')
                      ->join($jointamu,'tb_booking.kode_booking','=','tb_booking_kamar.kode_booking')
                      ->join($joinkamar,'tb_kamar.id_kamar','=','tb_booking_kamar.id_kamar')//function($join){
                        //$join->on('tb_kamar.id_kamar','=','tb_booking_kamar.id_kamar','INNER JOIN','tb_jenis','tb_kamar.id_kamar','=','tb_booking_kamar.id_kamar');
                      
                      ->where('tb_booking.id_tamu',$tamu['id_tamu'])->orderBy('tgl_booking','DESC')->paginate(6);

                             
        return view('account-user')->with('userData',$tamu)->with('datas',$reservasi)->with('request',$request);
      }
    }
    public function ubahData(request $request)
   {
      $s = $request->session()->get('username-cj');
      if(!isset($s)){
        return back();
      }else{
        $tamu = tamu::where('email',$s)->first();        
        $jointamu = DB::raw("(tb_booking INNER JOIN tb_tamu ON tb_booking.id_tamu=tb_tamu.id_tamu)");
        $joinkamar = DB::raw("(tb_kamar INNER JOIN tb_jenis_kamar ON tb_jenis_kamar.id_jenis=tb_kamar.id_jenis)");
        $reservasi = reservasi::select('*')
                      ->join($jointamu,'tb_booking.kode_booking','=','tb_booking_kamar.kode_booking')
                      ->join($joinkamar,'tb_kamar.id_kamar','=','tb_booking_kamar.id_kamar')//function($join){
                        //$join->on('tb_kamar.id_kamar','=','tb_booking_kamar.id_kamar','INNER JOIN','tb_jenis','tb_kamar.id_kamar','=','tb_booking_kamar.id_kamar');
                      
                      ->where('tb_booking.id_tamu',$tamu['id_tamu'])->orderBy('tgl_booking','DESC')->paginate(6);

                             
        return view('ubah-data')->with('userData',$tamu)->with('datas',$reservasi)->with('request',$request);
      }
    }
    public function ubahProses(request $request)
   {
        $this->validate($request, [
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'nohp' => 'required|numeric',
            'tgl_lahir' => 'date_format:"Y-m-d"|required',
            'noid' => 'required|numeric',
          ]);
      $s = $request->session()->get('username-cj');
      if(!isset($s)){
        return back()->withErrors();
      }else{
        $ubah = tamu::where('id_tamu',$request['id_tamu'])->first();
        $ubah->no_identitas = $request['noid'];
        $ubah->nama_tamu = $request['nama_lengkap'];
        $ubah->alamat = $request['alamat'];
        $ubah->no_tlp = $request['nohp'];
        $ubah->tgl_lahir = $request['tgl_lahir'];
        $ubah->update();
        return redirect()->to('account-user');
      }
    }
//============================================Login User============================================
   public function loginUser(request $request)
   {
      $s =$request->session()->get('username-cj');
       if(isset($s)){
        return back();
       }else{
        return view('login-user');
       }
   }
   public function logout(request $request)
   {
       $request->session()->flush();
       return redirect()->to('/');
   }
   public function cek(request $request)
   {
    $this->validate($request, [
      'username-cj' => 'required|email',
      'password-cj' => 'required|min:8'
    ]);

    $login  = akun::where('email',$request['username-cj'])->first();
    if(Hash::check($request['password-cj'],$login['password']) && $login['status_akun'] == 1){
      $request->session()->put('username-cj',$request['username-cj']);
      return redirect()->to('/');
    }else{
      $error="Email / Password anda salah";
      return back()->with('error',$error);
    }  
    return back()->withErrors();
   }
   public function registrasi(request $request)
    {
      if(empty($request->session()->get('username-cj'))){
        return view('registrasi')->with('request',$request);
      }else{
        return redirect()->to('/');
      }
    }
   public function registrasiStore(request $request)
    {
          $akun = akun::where('email',$request['email'])->first();
          if($akun['email']==$request['email']){
            $error="Email sudah terdaftar";
            return back()->with('err',$error);
          }
          $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
            'pass_confirmation' => 'required|min:8|same:password',
            'namaDepan' => 'required',
            'namaBelakang' => 'required',
            'alamat' => 'required',
            'nohp' => 'required|numeric',
            'tgl_lahir' => 'date_format:"Y-m-d"|required',
            'noid' => 'required|numeric',
          ]);
         $datas = tamu::orderBy('id_tamu','DESC')->first();
         $noidt = $datas['no_identitas'];
         $tambah = new akun();
         $tambah->email = $request['email'];
         $tambah->password = bcrypt($request['password']);
         $data = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
         $string = '';
         for($i = 0; $i < 10; $i++) {
             $pos = rand(0, strlen($data)-1);
             $string .= $data{$pos};
         }
         $tambah->token_get = $string;
         $tambah->status_akun = 0;
         $tambah->save();
         $tambah = new tamu();
         $tambah->id_tamu = $datas['id_tamu']+1;
         $namaLengkap = $request['namaDepan']." ".$request['namaBelakang'];
         $tambah->nama_tamu = $namaLengkap;
         $tambah->alamat = $request['alamat'];
         $tambah->no_tlp = $request['nohp'];
         $email = $request['email'];
         $tambah->email = $email;
         $tambah->tgl_lahir = $request['tgl_lahir'];
         $tambah->no_identitas = $request['noid'];
         $tambah->save();
         $datas2 = tamu::select('*')
                      ->join('tb_akun','tb_akun.email','=','tb_tamu.email')
                      ->orderBy('id_tamu','DESC')->first();
         if($noidt == $datas2['no_identitas']){
            return back()->withErrors();
          }
      Mail::send('emails.konfirmasi', ['data'=>$datas2], function ($mail) use ($datas2)
      {
        $mail->to($datas2->email, $datas2->nama_tamu);
        $mail->subject('Halaman Konfirmasi CJ Hotel');
      });
      return redirect()->to('halaman-konfirmasi');
   }
   public function halamanKonfirmasi()
   {
    return view('halaman-konfirmasi');
   }
   public function aktivasiAkun(request $request)
   {
    $this->validate($request, [
      'token-confirm' => 'required',
    ]);

    $login  = akun::where('token_get',$request['token-confirm'])->first();
    if($login){
        $login->token_get = "";
        $login->status_akun = 1;
        $login->update();
      return redirect()->to('/');
    }else{
      $error="Token aktivasi anda salah";
      return back()->with('error',$error);
    }  
    return back()->withErrors();
   }
   public function lupaProses(request $request)
   {
    $this->validate($request, [
      'email' => 'required|email',
    ]);

    $login  = akun::where('email',$request['email'])->first();
    if($login){
         $data = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
         $string = '';
         for($i = 0; $i < 10; $i++) {
             $pos = rand(0, strlen($data)-1);
             $string .= $data{$pos};
         }
        $login->token_get = $string;
        $login->update();

         $datas2 = tamu::select('*')
                      ->join('tb_akun','tb_akun.email','=','tb_tamu.email')
                      ->orderBy('id_tamu','DESC')->first();
         Mail::send('emails.lupapassword', ['data'=>$datas2], function ($mail) use ($datas2)
        {
          $mail->to($datas2->email, $datas2->nama_tamu);
          $mail->subject('Bantuan Lupa Password CJ Hotel');
        });
      $error="silakan cek email anda";
      return back()->with('error',$error);
    }else{
      $error="email anda salah";
      return back()->with('error',$error);
    }  
    return back()->withErrors();
   }
   public function lupaPass(request $request)
   {
      if(empty($request->session()->get('username-cj'))){
        return view('lupa-password')->with('request',$request);
      }else{
        return redirect()->to('/');
      }
   }
   public function lupaGanti(request $request, $token)
   { 
      $akun = akun::where('token_get',$token)->first();
      if(empty($request->session()->get('username-cj')) && !empty($akun['token_get'])){
        return view('lupa-ganti')->with('request',$akun);
      }else{
        return redirect()->to('/');
      }
   }

   public function lupaGantiProses(request $request)
   { 

      $this->validate($request, [
        'passbaru' => 'required|min:8',
        'passbaruConfirm' => 'required|min:8|same:passbaru',
      ]);
      $update = akun::where('token_get',$request['token'])->first();
      if($update){
        $update->password = bcrypt($request['passbaru']);
        $update->token_get = '';
        $update->update();
        return vredirect()->to('login-user');
      }
      return back()->withErrors();
   }

//===============================================================================================   
//=====================================admin=====================================================
   public function indexAdmin(request $request)
   {
      /*$sesi = $request->session()->get('email');
      if(empty($sesi)){
        return redirect()->to('/admin-cj/login');
      }*/
      return view('dashboard');
   }
}

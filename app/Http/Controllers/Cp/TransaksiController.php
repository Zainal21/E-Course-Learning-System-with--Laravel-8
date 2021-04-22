<?php

namespace App\Http\Controllers\Cp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\akses_kelas;
use App\Mail\notification_success;
use Illuminate\Support\Facades\Crypt;
use Mail;

class TransaksiController extends Controller
{
    public function index()
    {
        $this->var = [
            'title' => 'Admin - Transaksi',
            'transaksi' => transaksi::with(['kelas', 'user'])->get()
        ];
        return view('admin.transaksi.index', $this->var);
        // dd($this->var);
    }

    public function setStatus(Request $req, $id)
    {
        // set Status by request params
         transaksi::where(['id' =>$id])->update([
            'status' => $req->status
        ]);
        $transaksi = transaksi::with(['kelas', 'user'])->where(['id' => $id])->first();
        // check transacation status
        if($transaksi->status == 'sukses'){
            akses_kelas::create([
                'user_id' => $transaksi->user_id,
                'kelas_id' => $transaksi->kelas_id
            ]);
            // send mail to users
            Mail::to($transaksi->user)->send(new notification_success($transaksi));

                // Konfigurasi midtrans
                // Config::$serverKey = config('services.midtrans.serverKey');
                // Config::$isProduction = config('services.midtrans.isProduction');
                // Config::$isSanitized = config('services.midtrans.isSanitized');
                // Config::$is3ds = config('services.midtrans.is3ds');

                // // Buat array untuk dikirim ke midtrans
                // $midtrans = array(
                //     'transaction_details' => array(
                //         'order_id' =>  $code,
                //         'gross_amount' => (int) $request->total_price,
                //     ),
                //     'customer_details' => array(
                //         'first_name'    => 'Galih Pratama',
                //         'email'         => 'hanamura.iost@gmail.com'
                //     ),
                //     'enabled_payments' => array('gopay','bank_transfer'),
                //     'vtweb' => array()
                // );

                // try {
                //     // Ambil halaman payment midtrans
                //     $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;

                //     // Redirect ke halaman midtrans
                //     return redirect($paymentUrl);
                // }
                // catch (Exception $e) {
                //     echo $e->getMessage();
                // }
            return redirect()->back()->with('status', 'Data Status Transaksi Berhasil Diubah');
        }else{
            // redirected
            return redirect()->back()->with('status', 'Data Status Transaksi Berhasil Diubah');
        }
    }

    // public function callback(Request $request)
    // {
    //     // Set konfigurasi midtrans
    //     Config::$serverKey = config('services.midtrans.serverKey');
    //     Config::$isProduction = config('services.midtrans.isProduction');
    //     Config::$isSanitized = config('services.midtrans.isSanitized');
    //     Config::$is3ds = config('services.midtrans.is3ds');

    //     // Buat instance midtrans notification
    //     $notification = new Notification();

    //     // Assign ke variable untuk memudahkan coding
    //     $status = $notification->transaction_status;
    //     $type = $notification->payment_type;
    //     $fraud = $notification->fraud_status;
    //     $order_id = $notification->order_id;

    //     // Cari transaksi berdasarkan ID
    //     $transaction = Transaction::findOrFail($order_id);

    //     // Handle notification status midtrans
    //     if ($status == 'capture') {
    //         if ($type == 'credit_card'){
    //             if($fraud == 'challenge'){
    //                 $transaction->status = 'PENDING';
    //             }
    //             else {
    //                 $transaction->status = 'SUCCESS';
    //             }
    //         }
    //     }
    //     else if ($status == 'settlement'){
    //         $transaction->status = 'SUCCESS';
    //     }
    //     else if($status == 'pending'){
    //         $transaction->status = 'PENDING';
    //     }
    //     else if ($status == 'deny') {
    //         $transaction->status = 'CANCELLED';
    //     }
    //     else if ($status == 'expire') {
    //         $transaction->status = 'CANCELLED';
    //     }
    //     else if ($status == 'cancel') {
    //         $transaction->status = 'CANCELLED';
    //     }

    //     // Simpan transaksi
    //     $transaction->save();

    //     // Kirimkan email
    //     if ($transaction)
    //     {
    //         if($status == 'capture' && $fraud == 'accept' )
    //         {
    //             //
    //         }
    //         else if ($status == 'settlement')
    //         {
    //             //
    //         }
    //         else if ($status == 'success')
    //         {
    //             //
    //         }
    //         else if($status == 'capture' && $fraud == 'challenge' )
    //         {
    //             return response()->json([
    //                 'meta' => [
    //                     'code' => 200,
    //                     'message' => 'Midtrans Payment Challenge'
    //                 ]
    //             ]);
    //         }
    //         else
    //         {
    //             return response()->json([
    //                 'meta' => [
    //                     'code' => 200,
    //                     'message' => 'Midtrans Payment not Settlement'
    //                 ]
    //             ]);
    //         }

    //         return response()->json([
    //             'meta' => [
    //                 'code' => 200,
    //                 'message' => 'Midtrans Notification Success'
    //             ]
    //         ]);
    //     }
    // }
}

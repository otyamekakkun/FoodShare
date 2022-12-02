<?php
// メール機能の実装。買われる商品名は毎回違うので動的に表現した。
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\HaikiController;
use App\Http\Controllers\shopper\ProductController;
class Test extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */


public $productmessage;



    public function __construct($productmessage)
    {
            //
            $this->productmessage = $productmessage;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
            return $this->subject('haikishare商品のお買いあげのお知らせ')
                    ->view('mails.test');
    }
}

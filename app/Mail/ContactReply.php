<?php
// メール機能の実装。購入される買われる商品は毎回違うので,動的に表現した。
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
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
            return $this->subject('foodshare 商品のお買いあげのお知らせ')
                    ->view('mails.test');
    }
}

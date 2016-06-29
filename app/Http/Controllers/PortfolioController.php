<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests;

require '/Applications/MAMP/htdocs/travisueki_portfolio/vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

class PortfolioController extends Controller
{
    // Index page controller
    public function index() {
        return view('portfolio.index');
    }

    // About page controller
    public function about() {
        return view('portfolio.about');
    }

    // Contact page controller
    public function contact() {
        return view('portfolio.contact');
    }

    // Blog home page controller
    public function blog_list() {
        $posts = Post::all();
        return view('portfolio.blog_list', compact('posts'));
    }

    // Blog detail page controller
    public function blog_post() {
        return view('portfolio.blog_post');
    }

    public function details(Post $post) {
        return view('portfolio.post_details', compact('post'));
    }

    public function contact_email(Request $request) {

        $mail = new \PHPMailer;

        $mail->SMTPDebug = 0;                               // Enable verbose debug output

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;
        //Ask for HTML-friendly debug output
        //$mail->Debugoutput = 'html';
        //Set the hostname of the mail server
        $mail->Host = env('CPHPMAILER_HOST');
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6
        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = env('CPHPMAILER_PORT');
        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = env('CPHPMAILER_SMTPS');;
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = env('CPHPMAILER_USERNAME');
        //Password to use for SMTP authentication
        $mail->Password = env('CPHPMAILER_PASSWORD');
        //Set who the message is to be sent from
        $mail->setFrom('Travis@travisueki.com', 'Travis Ueki');
        //Set an alternative reply-to address
        $mail->addReplyTo('travisueki.com@gmail.com', 'Travis Ueki');
        //Set who the message is to be sent to
        $mail->addAddress($request->contact_email, $request->contact_name);
        // Send to my email to see inquires
        $mail->addBCC('travisueki.com@gmail.com');
        //Set the subject line
        $mail->Subject = 'TravisUeki.com - Thank You!';
        //Read an HTML message body from an external file, convert referenced images to embedded,
        //convert HTML into a basic plain-text alternative body
        $mail->msgHTML(
            '<p>Thanks for reaching out ' . $request->contact_name . '</p>' . '<br>' .
            'You sent: ' . '<i>' . $request->contact_body . '</i><br>' .
            '<p>I will try to respond as soon as possible! Mahalo!</h2>'
        );
        //Replace the plain text body with one created manually
        $mail->altBody = 'This is a plain-text message body';
        //Attach an image file
        //$mail->addAttachment('images/phpmailer_mini.png');
        //send the message, check for errors
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }
        return redirect('/');
    }
}

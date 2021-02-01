<?php

include "autoload.php";

function prepareEmailMessage(array $inputs) {
    $emailBody = "<div>";

    if(isset($inputs[NAME_KEY])) {
        $emailBody .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$inputs[NAME_KEY]."</span>
                        </div>";
    }

    if(isset($inputs[EMAIL_KEY])) {
        $emailBody .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$inputs[EMAIL_KEY]."</span>
                        </div>";
    }

    if(isset($inputs[PHONE_KEY])) {
        $emailBody .= "<div>
                           <label><b>Visitors Phone:</b></label>&nbsp;<span>".$inputs[PHONE_KEY]."</span>
                        </div>";
    }

    if(isset($inputs[BUDGET_KEY])) {
        $emailBody .= "<div>
                           <label><b>Budget:</b></label>&nbsp;<span>".$inputs[BUDGET_KEY]."</span>
                        </div>";
    }

    if(isset($inputs[COMMENT_KEY])) {
        $emailBody .= "<div>
                           <label><b>Visitor Comment:</b></label>
                           <div>".$inputs[COMMENT_KEY]."</div>
                        </div>";
    }

    $emailBody .= "</div>";

    return $emailBody;
}

function sendEmail(array $inputs) {
    $recipient = env('EMAIL_RECIPIENT');
    $message = prepareEmailMessage($inputs);
    $headers  = 'MIME-Version: 1.0' . "\r\n"
        .'Content-type: text/html; charset=utf-8' . "\r\n"
        .'From: ' . $inputs[EMAIL_KEY] . "\r\n";

    mail($recipient, EMAIL_SUBJECT, $message, $headers);
}

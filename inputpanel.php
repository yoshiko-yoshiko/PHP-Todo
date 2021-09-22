<?php
    function f_input_panel(){
        $OUTPUT = "
            <form action='".__PROGRAM__."' method='".__SEND_METHOD__."'>
                <ul>
                    <li>無意味な時間を過ごさない</li>
                    <li>おにぎり食べる</li>
                    <li>菊池裕文にお金借りる</li>
                </ul>
                    <input type='text' name='add'>
                    <input type='submit' value='登録する'>
                    <input type='reset' value='削除する'>
                <br>
        \n";

        $OUTPUT .= "
        </form>
        \n";

        return $OUTPUT;
    }


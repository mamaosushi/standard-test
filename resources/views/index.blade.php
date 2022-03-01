<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>
    <style>
    body {
        display: flex;
        justify-content: center;
    }
    .container {
        text-align: center;
    }
    h1 {
        font-size: 20px;
    }
    table {
        height: 80vh;
        width: 45vw;
    }
    .item-name {
        font-size: 14px;
        text-align: left;
        margin-right: 20px;
    }
    .required {
        color: red;
        margin-left: 5px;
    }
    .radio {
        text-align: left;
        margin-right: 15px;
        margin-left: 10px;
        padding-left: 20px;
        vertical-align:text-top;
    }
    .radio-btn {
        transform: scale(2.0);
        font-size: 13px;
        padding-left: 20px;
        margin-right: 10px;
    }
    .form {
        border: 1px solid darkgray;
        border-radius: 5px;
        width: 90%;
        height: 30px;
    }
    .psform {
        border: 1px solid darkgray;
        border-radius: 5px;
        width: 85%;
        height: 30px;
    }
    .psbox {
        font-weight: bold;
        letter-spacing: 10px;
    }
    .opinionform {
        border: 1px solid darkgray;
        border-radius: 5px;
        width: 90%;
        height: 110px;
    }
    .ex{
        font-size: 8px;
        color: darkgray;
        vertical-align:top;
        text-align: left;
        padding-left: 40px; 
    }
    .exname {
        display: inline-block;
    }
    .exname:last-of-type {
        margin-left: 100px;
    }
    .btn {
        height: 45px;
        width: 140px;
        color: white;
        background-color: black;
        border-radius: 5px;
    }
</style>
</head>
<body>
    <div class="container">  
        <h1>お問い合わせ</h1>
        <form method="post" action="{{ route('form.confirm')}}">
            @csrf
            <table>
                <tr>
                    <th class="item-name">お名前<span class='required'>※</span></th>
                    <td>
                        <input class="form" type="text" name="fullname" value="{{ old('fullname') }}">
                    </td>
                </tr>
                @error('fullname')
                <tr>
                    <th></th>
                    <td>{{$message}}</td>
                </tr>
                @enderror
                <tr>
                    <th></th>
                    <td class="ex">
                        <p class="exname">例）山田</p>
                        <p class="exname">例）太郎</p>
                    </td>
                </tr>
                <tr>
                    <th class="item-name">性別<span class='required'>※</span></th>
                    <td class="radio">
                        <input class="radio-btn" type="radio" name="gender" value="1" checked="checked">男性</input>
                        <input class="radio-btn" type="radio" name="gender" value="2">女性</input>
                    </td>
                    <td></td>
                </tr>
                @error('gender')
                <tr>
                    <th></th>
                    <td>{{$message}}</td>
                </tr>
                @enderror
                <tr>
                    <th class="item-name">メールアドレス<span class='required'>※</span></th>
                    <td>
                        <input class="form" type="email" name="email" value="{{ old('email') }}">
                    </td>
                </tr>
                @error('email')
                <tr>
                    <th></th>
                    <td>{{$message}}</td>
                </tr>
                @enderror
                <tr>
                    <th></th>
                    <td class="ex">例）test@example.com</td>
                </tr>
                <tr>
                    <th class="item-name">郵便番号<span class='required'>※</span></th>
                    <td class="psbox">
                        〒<input class="psform" type="text" name="postcode" value="{{ old('postcode') }}">
                    </td>
                </tr>
                @error('postcode')
                <tr>
                    <th></th>
                    <td>{{$message}}</td>
                </tr>
                @enderror
                <tr>
                    <th></th>
                    <td class="ex">例）123-4567</td>
                </tr>
                <tr>
                    <th class="item-name">住所<span class='required'>※</span></th>
                    <td>
                        <input class="form" type="text" name="address" value="{{ old('address') }}">
                    </td>
                </tr>
                @error('address')
                <tr>
                    <th></th>
                    <td>{{$message}}</td>
                </tr>
                @enderror
                <tr>
                    <th></th>
                    <td class="ex">例）東京都渋谷区千駄ヶ谷1-2-3</td>
                </tr>
                <tr>
                    <th class="item-name">建物名</th>
                    <td>
                        <input class="form" type="text" name="building_name" value="{{ old('building_name') }}">
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td class="ex">例）千駄ヶ谷マンション</td>
                </tr>
                <tr>
                    <th class="item-name">ご意見<span class='required'>※</span></th>
                    <td>
                        <input class="opinionform" type="textarea" name="opinion" value="{{ old('opinion') }}">
                    </td>
                </tr>
                @error('opinion')
                <tr>
                    <th></th>
                    <td>{{$message}}</td>
                </tr>
                @enderror
            </table>
            <input class="btn" type="submit" value='確認'>
        </form>
    </div>
</body>
</html>
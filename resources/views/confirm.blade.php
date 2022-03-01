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
        .btn {
            height: 45px;
            width: 140px;
            color: white;
            background-color: black;
            border-radius: 5px;
            display: block;
            margin: 0 auto;
        }
        .btn-re {
            display: inline-block;
            border-top: none;
            border-right: none;
            border-left: none;
            background-color: white;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">  
        <h1>内容確認</h1>
        <form action="{{ route('form.complete') }}" method="post">
            @csrf

            <table>
                <tr>
                    <th class="item-name">お名前</th>
                    <td>
                        {{ $contact['fullname'] }}
                        <input type="hidden" value="{{ $contact['fullname'] }}" name="fullname">
                    </td>
                </tr>
                <tr>
                    <th class="item-name">性別</th>
                    <td>
                        {{ $contact['gender'] }}
                        <input type="hidden" value="{{ $contact['gender'] }}" name="gender">
                    </td>
                </tr>
                <tr>
                    <th class="item-name">メールアドレス</th>
                    <td>
                        {{ $contact['email'] }}
                        <input type="email" value="{{ $contact['email'] }}" name="email">
                    </td>
                </tr>
                <tr>
                    <th class="item-name">郵便番号</th>
                    <td class="psbox">
                        {{ $contact['postcode'] }}
                        <input type="hidden" value="{{ $contact['postcode'] }}" name="postcode"> 
                    </td>
                </tr>
                <tr>
                    <th class="item-name">住所</th>
                    <td>
                        {{ $contact['address'] }}
                        <input type="hidden" value="{{ $contact['address'] }}" name="address">
                    </td>
                </tr>
                <tr>
                    <th class="item-name">建物名</th>
                    <td>
                        {{ $contact['building_name'] }}
                        <input type="hidden" value="{{ $contact['building_name'] }}" name="building_name">
                    </td>
                </tr>
                <tr>
                    <th class="item-name">ご意見</th>
                    <td>
                        {{ $contact['opinion'] }}
                        <input type="hidden" value="{{ $contact['opinion'] }}" name="opinion">
                    </td>
                </tr>
            </table>
            <input class="btn" type="submit" name="action" value='送信'>
            <input class="btn-re" type="submit" name="action" value='修正する'>
            @foreach($contact->getAttributes() as $key => $value)
            <input type="hidden" name="{{$key}}" value="{{$value}}">
            @endforeach
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理システム</title>
    <style>
        h1 {
            text-align: center;
        }
       .form-container {
           display: flex;
           justify-content: center;
       }
       .form-box {
           width: 80%;
           border: 1px solid black;
           height: 30vh;
           padding: 50px;
       }
       .form-list {
           width: 100%;
           height: 100%;
           padding-left: 50px;
       }
       .input {
           padding: 10px 50px;
           border-radius: 4px;
           border: 1px solid lightgray;
           margin-bottom: 35px;
       }
       .btn-area {
           text-align: center;
       }
       .sebtn {
           display: inline-block;
           padding: 5px 40px;
           background-color: black;
           color: white;
           border-radius: 3px;
       }
       table {
           width: 95%;
           text-align: center;
           margin: 50px 30px;
           border-collapse:collapse;
       }
       .title th {
           border-bottom: 2px solid black;
       }
       .del-btn {
           padding: 2px 15px;
           background-color: black;
           color: white;
           border-radius: 3px;
           font-size: 12px;
       }
    </style>
</head>
<body>
    <div class='body'>
        <h1>管理システム</h1>
        <div class='form-container'>
            <div class="form-box">
                <form action="find" method="post" class="form-list">
                @csrf
                    お名前<input type="text" name="fullname" value="" class="input">
                    性別<input type="" name="gender" value="" class="input"><br>
                    登録日<input type="text" name="created_at" value="" class="input"><br>
                    メールアドレス<input type="email" name="email" value="" class="input"><br>
                    <div class="btn-area">
                        <input type="submit" value="検索" class="sebtn">
                    </div>
                </form>
            </div>
        </div>
        <div class='list-container'>
        @if (@isset($contacts))
            <table>
                <tr class='title'>
                    <th>ID</th>
                    <th></th>
                    <th>お名前</th>
                    <th>性別</th>
                    <th></th>
                    <th>メールアドレス</th>
                    <th></th>
                    <th>ご意見</th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach($contacts as $contact)
                <tr class='list'>
                    <td>{{ $contact->id }}<td>
                    <td class="th-parts">{{ $contact->fullname }}</td>
                    <td class="th-parts">{{ $contact->gender }}<td>
                    <td class="th-parts">{{ $contact->email }}<td>
                    <td class="th-email">{{ $contact->opinion }}<td>
                    <td><input type='submit' class='del-btn' value='削除'></td>
                </tr>
                @endforeach
            </table>
        @endif  
        </div>
    </div>
</body>
</html>
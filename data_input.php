<html>
    <head><title>간단한 번호 관리</title></head>
    <body><br><center><h2> 번 호 입 력 </h2><hr>
    <form name=f2 method=post action="insert_db.php">
        <table border=0 width=500 height=180 bgcolor=#FFFFCC>
            <tr>
                <td height=20></td>
            </tr>
            <tr>
                <br>
                <td width=20% height=30 align=right><b>번호 : </b></td>
                <td> &nbsp;<input type="text" size=12 maxlength=10 name='num'></td>
        </tr>
        <tr>
            <td width=20% height=30 align=right><b> 이름 : </b></td>
            <td> &nbsp;<input type="text" size=12 amxlength=10 name='name'></td>
        </tr>
        <tr>
            <td height=30 align=right><b> 학교 : </b></td>
            <td>&nbsp;<input type="text" size=40 name='school'></td>
        </tr>
            </td>
            <td height=40% align=center colspan=2>
            <input type=submit value=" 입력하기 ">&nbsp;&nbsp;&nbsp;&nbsp;
            <input type=reset value=" 다시작성 ">
        </td>
        </tr>
        </table>
</form>
◀◀ [ <a href="main.php">메인 화면</a>] &nbsp; ㅣ &nbsp;
    [ <a href="data_out.php"> 결과 화면</a>] ▶▶</center>
    </body>
</html>
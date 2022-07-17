
    @include('layout.header')
    <title>Info - Care of Clean</title>
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <body>
                    <table width="750" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF" >
                      <!--DWLayoutTable-->
                      <tr>
                        <td height="36" colspan="9" valign="top" bgcolor="79BA44"><!--DWLayoutEmptyCell-->&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="196" colspan="9" valign="top"><img src="foto_info/header.PNG"/></td>
                      </tr>
                      <tr>
                        <td height="468" colspan="9" valign="top"><img src="foto_info/profile.PNG"/></td>
                      </tr>

                      <tr>
                        <td height="78" colspan="9" align="center" valign="middle"><b>3 Langkah Mudah Menjual Sampah </b></td>
                      </tr>
                      <tr>
                        <td width="119" height="159" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                        <td width="282" align="center" valign="middle"><img src="foto_info/x1.png" width="133" height="126"/></td>
                        <td width="30" rowspan="2" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                        <td width="282" align="center" valign="middle"><img src="foto_info/x2.png" width="133" height="126"/></td>
                        <td width="52" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                        <td colspan="3" align="center" valign="middle"><img src="foto_info/x3.png"/></td>
                        <td width="106" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="57" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                        <td align="center" valign="middle">kumpulkan sampah anda sesuai jenisnya </td>
                        <td align="center" valign="middle">masukan data sampah sesuai jenis dan beratnya kemudian ambil gambar </td>
                        <td colspan="2" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                        <td width="282" align="center" valign="middle"><p>setelah anda menentukan lokasi penjemputan, pengepul akan segera menjemput </p></td>
                        <td colspan="2" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="70" colspan="9" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
                      </tr>
                      <tr>
                        <td height="1"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td width="37"></td>
                        <td></td>
                        <td width="17"></td>
                        <td></td>
                      </tr>
                    </table>
                    </body>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function return(clicked_id)
        {
            alert(clicked_id);
        }
      </script>
      @include('sweetalert::alert')

@include ('layout.footer')

<!DOCTYPE html>
<html>

  <head>

  </head>
  <body>

        <table style="table-layout: fixed; width: 100%; background-color: white; padding: 2px;">

    		<thead>
    		<td colspan="3" style="background-color: pink; text-align: center;">This is a message from Kenyan love App:contact</td>
    		</thead>

            <tbody>
          
              <tr bgcolor="#FFB6C1">
                <td colspan="2">@yield('mailsebule')</td>
                <td>@yield('ads')</td>
              </tr>
              <tr bgcolor="#ADD8E6">
                <td width="200px" style="text-align: left; vertical-align: top;">
                	<img src="{{url('/assets/images/app/kllogo3.png')}}" alt="Kenyan love"  height="100" width="100" /></td>
                <td width="200px" style="text-align: left; vertical-align: top;">
                	<b>I met her here: I met him here</b><br>
	                <a href="{{ route('home') }} ">KENYAN LOVE</a><br />
				</td>
                <td width="200px" style="text-align: left; vertical-align: top;">
	                email:info@goldensparkleservices.com<br>
	                phone: +254 724 686751</td>
              </tr>
         
              
            </tbody>
        </table>

  </body>
</html>
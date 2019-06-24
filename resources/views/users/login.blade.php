@extends('layouts.nyumbaHome')

@section('kichwa')

    Carison: Buy rubber stamps, Acrylic stamps and company seals in Kenya

@endsection

@section('sebule')

<div class="row">
    <div class="col-md-6">
            <div class="login">
                        <form action="{{ route('signin') }}" method="post" accept-charset="UTF-8">

                            <div class="form-group">
                                <label for="email"> E-mail </label>
                                <input class="form-control" type="text" name="email" id="email">
                            </div>

                            <div class="form-group">
                                <label for="Password"> Password </label>
                                <input id="password" type="password" class="form-control" name="password">
                            </div>

                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <button type="submit" class="btn btn-info" style="clear: left; width: 100%; height: 32px; font-size: 13px;" type="submit" name="commit" value="Sign In">
                                        <i class="fa fa-btn fa-user"></i> Login
                                </button>

                        </form>
            </div> 
    </div>

    <div class="col-md-6">
        <div id="header"><a href="#" id="show">if not Signed up?</a> <a href="#" id="hide">I am registered</a></div>
        
        <div id="content"> 
  
           


            <form enctype="multipart/form-data" class="form-horizontal" role="form" method="POST" action="{{ route('signup') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                {{ csrf_field() }}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">


            
            <div class="col-md-12">

 
                                    <div class="field">
                                        <label for="FirstName">First Name</label>
                                                        
                                        <input id="FirstName" type="text" class="form-control" name="FirstName" value="{{ old('FirstName') }}">

                                        @if ($errors->has('FirstName'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('FirstName') }}</strong>
                                            </span>
                                        @endif
                                    </div>


                                    <div class="field">
                                        <label for="LastName">Last Name</label>
                                                        
                                        <input id="LastName" type="text" class="form-control" name="LastName" value="{{ old('LastName') }}">

                                        @if ($errors->has('LastName'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('LastName') }}</strong>
                                            </span>
                                        @endif

                                    </div>


                                    <div class="field"> 
                                        <label for="UserName">Company Name</label>
                                                        
                                        <input id="UserName" type="text" class="form-control" name="UserName" value="{{ old('UserName') }}">

                                        @if ($errors->has('UserName'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('UserName') }}</strong>
                                            </span>
                                        @endif

                                    </div>


                                    <div class="field">  
                                        <label for="date_of_birth">Date of birth</label> /:(will be private)<br>.
                                                    

                                        

                                        <!-- {{ Form::selectYear('dobyear', 2013, 2015, 2014, ['class' => 'btn-warning']) }} -->


                                            {{ Form::select('dobyear', [
                                            '1919' => '1919',
                                            '1920' => '1920',
                                            '1921' => '1921',
                                            '1922' => '1922',
                                            '1923' => '1923',
                                            '1924' => '1924',
                                            '1925' => '1925',
                                            '1926' => '1926',
                                            '1927' => '1927',
                                            '1928' => '1928',
                                            '1929' => '1929',
                                            '1930' => '1930',
                                            '1931' => '1931',
                                            '1932' => '1932',
                                            '1933' => '1933',
                                            '1934' => '1934',
                                            '1935' => '1935',
                                            '1936' => '1936',
                                            '1937' => '1937',
                                            '1938' => '1938',
                                            '1939' => '1939',
                                            '1940' => '1940',
                                            '1941' => '1941',
                                            '1942' => '1942',
                                            '1943' => '1943',
                                            '1944' => '1944',
                                            '1945' => '1945',
                                            '1946' => '1946',
                                            '1947' => '1947',
                                            '1948' => '1948',
                                            '1949' => '1949',
                                            '1950' => '1950',
                                            '1951' => '1951',
                                            '1952' => '1952',
                                            '1953' => '1953',
                                            '1954' => '1954',
                                            '1955' => '1955',
                                            '1956' => '1956',
                                            '1957' => '1957',
                                            '1958' => '1958',
                                            '1959' => '1959',
                                            '1960' => '1960',
                                            '1961' => '1961',
                                            '1962' => '1962',
                                            '1963' => '1963',
                                            '1964' => '1964',
                                            '1965' => '1965',
                                            '1966' => '1966',
                                            '1967' => '1967',
                                            '1968' => '1968',
                                            '1969' => '1969',
                                            '1970' => '1970',
                                            '1971' => '1971',
                                            '1972' => '1972',
                                            '1973' => '1973',
                                            '1974' => '1974',
                                            '1975' => '1975',
                                            '1976' => '1976',
                                            '1977' => '1977',
                                            '1978' => '1978',
                                            '1979' => '1979',
                                            '1980' => '1980',
                                            '1981' => '1981',
                                            '1982' => '1982',
                                            '1983' => '1983',
                                            '1984' => '1984',
                                            '1985' => '1985',
                                            '1986' => '1986',
                                            '1987' => '1987',
                                            '1988' => '1988',
                                            '1989' => '1989',
                                            '1990' => '1990',
                                            '1991' => '1991',
                                            '1992' => '1992',
                                            '1993' => '1993',
                                            '1994' => '1994',
                                            '1995' => '1995',
                                            '1996' => '1996',
                                            '1997' => '1997',
                                            '1998' => '1998',
                                            '1999' => '1999',
                                            ], '1999') }}



                                        {{ Form::selectMonth('dobmonth', 1, ['class' => 'btn-info']) }}
                                        <?php

                                            // build days menu
                                            echo '<select name="dobday">' . PHP_EOL;
                                            for ($d=1; $d<=31; $d++) {
                                                echo '  <option value="' . $d . '">' . $d . '</option>' . PHP_EOL;
                                            }
                                            echo '</select>' . PHP_EOL;
                                        ?>

                                       


                                        @if ($errors->has('date_of_birth'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('date_of_birth') }}</strong>
                                            </span>
                                        @endif
                                    </div>


                                   



                                    <div class="field">
                                        <label for="is_female">Gender</label><br />

                                        {{ Form::label('is_female', 'Female') }}
                                        {{ Form::radio('is_female', 1, true, ['class' => 'field']) }}

                                        {{ Form::label('is_female', 'Male') }}

                                        {{ Form::radio('is_female', 0, false, ['class' => 'field']) }}

                                       

                                    </div>


                                    <div class="field">
                                         
                                        <label>Profile image</label>
                                        <input type="file" name="mypic" class="form-field">
                                     
                                    </div>
                                    
                               

                               


                                    <div class="field">
                                       <label for="is_kenyan">Are you Kenyan</label><br />

                                        {{ Form::label('is_kenyan', 'Yes') }}
                                        {{ Form::radio('is_kenyan', 1, true, ['class' => 'field']) }}

                                        {{ Form::label('is_kenyan', 'No') }}

                                        {{ Form::radio('is_kenyan', 0, false, ['class' => 'field']) }}
                                    </div>

                                    <div class="field">
                                      
                                            <label for="Country">Country</label><br />

                                            {{ Form::select('Country', 

                                                [
                                                "Afghanistan"  =>  "Afghanistan", 
                                                "Albania"  =>  "Albania", 
                                                "Algeria"  =>  "Algeria", 
                                                "American Samoa"  =>  "American Samoa", 
                                                "Andorra"  =>  "Andorra", 
                                                "Angola"  =>  "Angola", 
                                                "Anguilla"  =>  "Anguilla", 
                                                "Antarctica"  =>  "Antarctica", 
                                                "Antigua and Barbuda"  =>  "Antigua and Barbuda", 
                                                "Argentina"  =>  "Argentina", 
                                                "Armenia"  =>  "Armenia", 
                                                "Aruba"  =>  "Aruba", 
                                                "Australia"  =>  "Australia", 
                                                "Austria"  =>  "Austria", 
                                                "Azerbaijan "  =>  "Azerbaijan",
                                                "Bahamas"  =>  "Bahamas", 
                                                "Bahrain"  =>  "Bahrain", 
                                                "Bangladesh"  =>  "Bangladesh", 
                                                "Barbados"  =>  "Barbados", 
                                                "Belarus"  =>  "Belarus", 
                                                "Belgium"  =>  "Belgium", 
                                                "Belize"  =>  "Belize", 
                                                "Benin"  =>  "Benin", 
                                                "Bermuda"  =>  "Bermuda", 
                                                "Bhutan"  =>  "Bhutan", 
                                                "Bolivia"  =>  "Bolivia", 
                                                "Bosnia and Herzegowina"  =>  "Bosnia and Herzegowina", 
                                                "Botswana"  =>  "Botswana", 
                                                "Bouvet Island"  =>  "Bouvet Island", 
                                                "Brazil"  =>  "Brazil", 
                                                "British Indian Ocean Territory"  =>  "British Indian Ocean Territory", 
                                                "Brunei Darussalam"  =>  "Brunei Darussalam", 
                                                "Bulgaria"  =>  "Bulgaria", 
                                                "Burkina Faso"  =>  "Burkina Faso", 
                                                "Burundi"  =>  "Burundi", 
                                                "Cambodia"  =>  "Cambodia", 
                                                "Cameroon"  =>  "Cameroon", 
                                                "Canada"  =>  "Canada", 
                                                "Cape Verde"  =>  "Cape Verde", 
                                                "Cayman Islands"  =>  "Cayman Islands", 
                                                "Central African Republic"  =>  "Central African Republic", 
                                                "Chad"  =>  "Chad", 
                                                "Chile"  =>  "Chile", 
                                                "China"  =>  "China", 
                                                "Christmas Island   "  =>  "Christmas Island",
                                                "Cocos (Keeling) Islands"  =>  "Cocos (Keeling) Islands", 
                                                "Colombia"  =>  "Colombia", 
                                                "Comoros"  =>  "Comoros", 
                                                "Congo"  =>  "Congo", 
                                                "Congo the Democratic Republic of the"  => "Congo the Democratic Republic of the", 
                                                "Cook Islands"  =>  "Cook Islands", 
                                                "Costa Rica"  =>  "Costa Rica", 
                                                "Cote d'Ivoire"  =>  "Cote d'Ivoire", 
                                                "Croatia (Hrvatska)"  =>  "Croatia (Hrvatska)", 
                                                "Cuba"  =>  "Cuba", 
                                                "Cyprus"  =>  "Cyprus", 
                                                "Czech Republic"  =>  "Czech Republic", 
                                                "Denmark"  =>  "Denmark", 
                                                "Djibouti"  =>  "Djibouti", 
                                                "Dominica"  =>  "Dominica", 
                                                "Dominican Republic"  =>  "Dominican Republic", 
                                                "East Timor "  =>  "East Timor",
                                                "Ecuador"  =>  "Ecuador", 
                                                "Egypt"  =>  "Egypt", 
                                                "El Salvador"  =>  "El Salvador", 
                                                "Equatorial Guinea"  =>  "Equatorial Guinea", 
                                                "Eritrea"  =>  "Eritrea", 
                                                "Estonia"  =>  "Estonia", 
                                                "Ethiopia"  =>  "Ethiopia", 
                                                "Falkland Islands (Malvinas)    "  =>  "Falkland Islands (Malvinas)",
                                                "Faroe Islands"  =>  "Faroe Islands", 
                                                "Fiji"  =>  "Fiji", 
                                                "Finland"  =>  "Finland", 
                                                "France"  =>  "France", 
                                                "France Metropolitan"  =>  "France Metropolitan", 
                                                "French Guiana"  =>  "French Guiana", 
                                                "French Polynesia   "  =>  "French Polynesia",
                                                "French Southern Territories"  =>  "French Southern Territories", 
                                                "Gabon"  =>  "Gabon", 
                                                "Gambia"  =>  "Gambia", 
                                                "Georgia"  =>  "Georgia", 
                                                "Germany"  =>  "Germany", 
                                                "Ghana"  =>  "Ghana", 
                                                "Gibraltar"  =>  "Gibraltar", 
                                                "Greece"  =>  "Greece", 
                                                "Greenland"  =>  "Greenland", 
                                                "Grenada"  =>  "Grenada", 
                                                "Guadeloupe"  =>  "Guadeloupe", 
                                                "Guam"  =>  "Guam", 
                                                "Guatemala"  =>  "Guatemala", 
                                                "Guinea"  =>  "Guinea", 
                                                "Guinea-Bissau"  =>  "Guinea-Bissau", 
                                                "Guyana"  =>  "Guyana", 
                                                "Haiti"  =>  "Haiti", 
                                                "Heard and Mc Donald Islands"  =>  "Heard and Mc Donald Islands", 
                                                "Holy See (Vatican City State)"  =>  "Holy See (Vatican City State)", 
                                                "Honduras"  =>  "Honduras", 
                                                "Hong Kong"  =>  "Hong Kong", 
                                                "Hungary    "  =>  "Hungary",
                                                "Iceland    "  =>  "Iceland",
                                                "India"  =>  "India", 
                                                "Indonesia"  =>  "Indonesia", 
                                                "Iran (Islamic Republic of)"  =>  "Iran (Islamic Republic of)", 
                                                "Iraq"  =>  "Iraq", 
                                                "Ireland"  =>  "Ireland", 
                                                "Israel"  =>  "Israel", 
                                                "Italy"  =>  "Italy", 
                                                "Jamaica"  =>  "Jamaica", 
                                                "Japan"  =>  "Japan", 
                                                "Jordan"  =>  "Jordan", 
                                                "Kazakhstan"  =>  "Kazakhstan", 
                                                "Kenya"  =>  "Kenya", 
                                                "Kiribati"  =>  "Kiribati", 
                                                "Korea Democratic People's Republic of"  =>  "Korea Democratic People's Republic of", 
                                                "Korea Republic of"  =>  "Korea Republic of", 
                                                "Kuwait"  =>  "Kuwait", 
                                                "Kyrgyzstan"  =>  "Kyrgyzstan", 
                                                "Lao People's Democratic Republic"  =>  "Lao People's Democratic Republic", 
                                                "Latvia"  =>  "Latvia", 
                                                "Lebanon"  =>  "Lebanon", 
                                                "Lesotho"  =>  "Lesotho", 
                                                "Liberia"  =>  "Liberia", 
                                                "Libyan Arab Jamahiriya"  =>  "Libyan Arab Jamahiriya", 
                                                "Liechtenstein"  =>  "Liechtenstein", 
                                                "Lithuania"  =>  "Lithuania", 
                                                "Luxembourg"  =>  "Luxembourg", 
                                                "Macau"  =>  "Macau", 
                                                "Macedonia The Former Yugoslav Republic of"  =>  "Macedonia The Former Yugoslav Republic of", 
                                                "Madagascar"  =>  "Madagascar", 
                                                "Malawi"  =>  "Malawi", 
                                                "Malaysia"  =>  "Malaysia", 
                                                "Maldives"  =>  "Maldives", 
                                                "Mali"  =>  "Mali", 
                                                "Malta"  =>  "Malta", 
                                                "Marshall Islands"  =>  "Marshall Islands", 
                                                "Martinique"  =>  "Martinique", 
                                                "Mauritania"  =>  "Mauritania", 
                                                "Mauritius"  =>  "Mauritius", 
                                                "Mayotte    "  =>  "Mayotte",
                                                "Mexico "  =>  "Mexico",
                                                "Micronesia Federated States of"  =>  "Micronesia Federated States of", 
                                                "Moldova Republic of"  =>  "Moldova Republic of", 
                                                "Monaco "  =>  "Monaco",
                                                "Mongolia"  =>  "Mongolia", 
                                                "Montserrat"  =>  "Montserrat", 
                                                "Morocco"  =>  "Morocco", 
                                                "Mozambique"  =>  "Mozambique", 
                                                "Myanmar"  =>  "Myanmar", 
                                                "Namibia"  =>  "Namibia", 
                                                "Nauru"  =>  "Nauru", 
                                                "Nepal"  =>  "Nepal", 
                                                "Netherlands"  =>  "Netherlands", 
                                                "Netherlands Antilles"  =>  "Netherlands Antilles", 
                                                "New Caledonia"  =>  "New Caledonia", 
                                                "New Zealand"  =>  "New Zealand", 
                                                "Nicaragua"  =>  "Nicaragua", 
                                                "Niger"  =>  "Niger", 
                                                "Nigeria"  =>  "Nigeria", 
                                                "Niue"  =>  "Niue", 
                                                "Norfolk Island"  =>  "Norfolk Island", 
                                                "Northern Mariana Islands"  =>  "Northern Mariana Islands", 
                                                "Norway"  =>  "Norway", 
                                                "Oman"  =>  "Oman", 
                                                "Pakistan"  =>  "Pakistan", 
                                                "Palau"  =>  "Palau", 
                                                "Panama "  =>  "Panama",
                                                "Papua New Guinea"  =>  "Papua New Guinea", 
                                                "Paraguay"  =>  "Paraguay", 
                                                "Peru"  =>  "Peru", 
                                                "Philippines"  =>  "Philippines", 
                                                "Pitcairn"  =>  "Pitcairn", 
                                                "Poland"  =>  "Poland", 
                                                "Portugal"  =>  "Portugal", 
                                                "Puerto Rico"  =>  "Puerto Rico", 
                                                "Qatar"  =>  "Qatar", 
                                                "Reunion"  =>  "Reunion", 
                                                "Romania"  =>  "Romania", 
                                                "Russian Federation "  =>  "Russian Federation",
                                                "Rwanda"  =>  "Rwanda", 
                                                "Saint Kitts and Nevis"  =>  "Saint Kitts and Nevis", 
                                                "Saint Lucia"  =>  "Saint Lucia", 
                                                "Saint Vincent and the Grenadines"  =>  "Saint Vincent and the Grenadines", 
                                                "Samoa  "  =>  "Samoa",
                                                "San Marino"  =>  "San Marino", 
                                                "Sao Tome and Principe"  =>  "Sao Tome and Principe", 
                                                "Saudi Arabia"  =>  "Saudi Arabia", 
                                                "Senegal"  =>  "Senegal", 
                                                "Seychelles"  =>  "Seychelles", 
                                                "Sierra Leone"  =>  "Sierra Leone", 
                                                "Singapore"  =>  "Singapore", 
                                                "Slovakia (Slovak Republic)"  =>  "Slovakia (Slovak Republic)", 
                                                "Slovenia"  =>  "Slovenia", 
                                                "Solomon Islands"  =>  "Solomon Islands", 
                                                "Somalia"  =>  "Somalia", 
                                                "South Africa"  =>  "South Africa", 
                                                "South Georgia and the South Sandwich Islands"  =>  "South Georgia and the South Sandwich Islands", 
                                                "Spain"  =>  "Spain", 
                                                "Sri Lanka"  =>  "Sri Lanka", 
                                                "St. Helena"  =>  "St. Helena", 
                                                "St. Pierre and Miquelon"  =>  "St. Pierre and Miquelon", 
                                                "Sudan"  =>  "Sudan", 
                                                "Suriname"  =>  "Suriname", 
                                                "Svalbard and Jan Mayen Islands"  =>  "Svalbard and Jan Mayen Islands", 
                                                "Swaziland"  =>  "Swaziland", 
                                                "Sweden"  =>  "Sweden", 
                                                "Switzerland"  =>  "Switzerland", 
                                                "Syrian Arab Republic"  =>  "Syrian Arab Republic", 
                                                "Taiwan Province of China"  =>  "Taiwan Province of China", 
                                                "Tajikistan"  =>  "Tajikistan", 
                                                "Tanzania United Republic of"  =>  "Tanzania United Republic of", 
                                                "Thailand"  =>  "Thailand", 
                                                "Togo"  =>  "Togo", 
                                                "Tokelau"  =>  "Tokelau", 
                                                "Tonga"  =>  "Tonga", 
                                                "Trinidad and Tobago"  =>  "Trinidad and Tobago", 
                                                "Tunisia"  =>  "Tunisia", 
                                                "Turkey"  =>  "Turkey", 
                                                "Turkmenistan"  =>  "Turkmenistan", 
                                                "Turks and Caicos Islands"  =>  "Turks and Caicos Islands", 
                                                "Tuvalu"  =>  "Tuvalu", 
                                                "Uganda"  =>  "Uganda", 
                                                "Ukraine"  =>  "Ukraine", 
                                                "United Arab Emirates   "  =>  "United Arab Emirates",
                                                "United Kingdom"  =>  "United Kingdom", 
                                                "United States"  =>  "United States", 
                                                "United States Minor Outlying Islands"  =>  "United States Minor Outlying Islands", 
                                                "Uruguay"  =>  "Uruguay", 
                                                "Uzbekistan"  =>  "Uzbekistan", 
                                                "Vanuatu"  =>  "Vanuatu", 
                                                "Venezuela"  =>  "Venezuela", 
                                                "Vietnam"  =>  "Vietnam", 
                                                "Virgin Islands (British)"  =>  "Virgin Islands (British)", 
                                                "Virgin Islands (U.S.)"  =>  "Virgin Islands (U.S.)", 
                                                "Wallis and Futuna Islands  "  =>  "Wallis and Futuna Islands",
                                                "Western Sahara"  =>  "Western Sahara", 
                                                "Yemen"  =>  "Yemen", 
                                                "Yugoslavia"  =>  "Yugoslavia", 
                                                "Zambia"  =>  "Zambia", 
                                                "Zimbabwe"  =>  "Zimbabwe"], "Kenya", ['class' => 'form-control'])

                                                }}

                                       
                                    </div>

                                    <div class="field">
                                        <label for="City">City</label>
                                                        
                                        <input id="City" type="text" class="form-control" name="City" value="{{ old('City') }}">

                                        @if ($errors->has('City'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('City') }}</strong>
                                            </span>
                                        @endif

                                    </div>


                                    <div class="field">
                                        
                                            <label for="origin">Origin Country</label><br />

                                                {{ Form::select('origin', 

                                                [
                                                "Afghanistan"  =>  "Afghanistan", 
                                                "Albania"  =>  "Albania", 
                                                "Algeria"  =>  "Algeria", 
                                                "American Samoa"  =>  "American Samoa", 
                                                "Andorra"  =>  "Andorra", 
                                                "Angola"  =>  "Angola", 
                                                "Anguilla"  =>  "Anguilla", 
                                                "Antarctica"  =>  "Antarctica", 
                                                "Antigua and Barbuda"  =>  "Antigua and Barbuda", 
                                                "Argentina"  =>  "Argentina", 
                                                "Armenia"  =>  "Armenia", 
                                                "Aruba"  =>  "Aruba", 
                                                "Australia"  =>  "Australia", 
                                                "Austria"  =>  "Austria", 
                                                "Azerbaijan "  =>  "Azerbaijan",
                                                "Bahamas"  =>  "Bahamas", 
                                                "Bahrain"  =>  "Bahrain", 
                                                "Bangladesh"  =>  "Bangladesh", 
                                                "Barbados"  =>  "Barbados", 
                                                "Belarus"  =>  "Belarus", 
                                                "Belgium"  =>  "Belgium", 
                                                "Belize"  =>  "Belize", 
                                                "Benin"  =>  "Benin", 
                                                "Bermuda"  =>  "Bermuda", 
                                                "Bhutan"  =>  "Bhutan", 
                                                "Bolivia"  =>  "Bolivia", 
                                                "Bosnia and Herzegowina"  =>  "Bosnia and Herzegowina", 
                                                "Botswana"  =>  "Botswana", 
                                                "Bouvet Island"  =>  "Bouvet Island", 
                                                "Brazil"  =>  "Brazil", 
                                                "British Indian Ocean Territory"  =>  "British Indian Ocean Territory", 
                                                "Brunei Darussalam"  =>  "Brunei Darussalam", 
                                                "Bulgaria"  =>  "Bulgaria", 
                                                "Burkina Faso"  =>  "Burkina Faso", 
                                                "Burundi"  =>  "Burundi", 
                                                "Cambodia"  =>  "Cambodia", 
                                                "Cameroon"  =>  "Cameroon", 
                                                "Canada"  =>  "Canada", 
                                                "Cape Verde"  =>  "Cape Verde", 
                                                "Cayman Islands"  =>  "Cayman Islands", 
                                                "Central African Republic"  =>  "Central African Republic", 
                                                "Chad"  =>  "Chad", 
                                                "Chile"  =>  "Chile", 
                                                "China"  =>  "China", 
                                                "Christmas Island   "  =>  "Christmas Island",
                                                "Cocos (Keeling) Islands"  =>  "Cocos (Keeling) Islands", 
                                                "Colombia"  =>  "Colombia", 
                                                "Comoros"  =>  "Comoros", 
                                                "Congo"  =>  "Congo", 
                                                "Congo the Democratic Republic of the"  => "Congo the Democratic Republic of the", 
                                                "Cook Islands"  =>  "Cook Islands", 
                                                "Costa Rica"  =>  "Costa Rica", 
                                                "Cote d'Ivoire"  =>  "Cote d'Ivoire", 
                                                "Croatia (Hrvatska)"  =>  "Croatia (Hrvatska)", 
                                                "Cuba"  =>  "Cuba", 
                                                "Cyprus"  =>  "Cyprus", 
                                                "Czech Republic"  =>  "Czech Republic", 
                                                "Denmark"  =>  "Denmark", 
                                                "Djibouti"  =>  "Djibouti", 
                                                "Dominica"  =>  "Dominica", 
                                                "Dominican Republic"  =>  "Dominican Republic", 
                                                "East Timor "  =>  "East Timor",
                                                "Ecuador"  =>  "Ecuador", 
                                                "Egypt"  =>  "Egypt", 
                                                "El Salvador"  =>  "El Salvador", 
                                                "Equatorial Guinea"  =>  "Equatorial Guinea", 
                                                "Eritrea"  =>  "Eritrea", 
                                                "Estonia"  =>  "Estonia", 
                                                "Ethiopia"  =>  "Ethiopia", 
                                                "Falkland Islands (Malvinas)    "  =>  "Falkland Islands (Malvinas)",
                                                "Faroe Islands"  =>  "Faroe Islands", 
                                                "Fiji"  =>  "Fiji", 
                                                "Finland"  =>  "Finland", 
                                                "France"  =>  "France", 
                                                "France Metropolitan"  =>  "France Metropolitan", 
                                                "French Guiana"  =>  "French Guiana", 
                                                "French Polynesia   "  =>  "French Polynesia",
                                                "French Southern Territories"  =>  "French Southern Territories", 
                                                "Gabon"  =>  "Gabon", 
                                                "Gambia"  =>  "Gambia", 
                                                "Georgia"  =>  "Georgia", 
                                                "Germany"  =>  "Germany", 
                                                "Ghana"  =>  "Ghana", 
                                                "Gibraltar"  =>  "Gibraltar", 
                                                "Greece"  =>  "Greece", 
                                                "Greenland"  =>  "Greenland", 
                                                "Grenada"  =>  "Grenada", 
                                                "Guadeloupe"  =>  "Guadeloupe", 
                                                "Guam"  =>  "Guam", 
                                                "Guatemala"  =>  "Guatemala", 
                                                "Guinea"  =>  "Guinea", 
                                                "Guinea-Bissau"  =>  "Guinea-Bissau", 
                                                "Guyana"  =>  "Guyana", 
                                                "Haiti"  =>  "Haiti", 
                                                "Heard and Mc Donald Islands"  =>  "Heard and Mc Donald Islands", 
                                                "Holy See (Vatican City State)"  =>  "Holy See (Vatican City State)", 
                                                "Honduras"  =>  "Honduras", 
                                                "Hong Kong"  =>  "Hong Kong", 
                                                "Hungary    "  =>  "Hungary",
                                                "Iceland    "  =>  "Iceland",
                                                "India"  =>  "India", 
                                                "Indonesia"  =>  "Indonesia", 
                                                "Iran (Islamic Republic of)"  =>  "Iran (Islamic Republic of)", 
                                                "Iraq"  =>  "Iraq", 
                                                "Ireland"  =>  "Ireland", 
                                                "Israel"  =>  "Israel", 
                                                "Italy"  =>  "Italy", 
                                                "Jamaica"  =>  "Jamaica", 
                                                "Japan"  =>  "Japan", 
                                                "Jordan"  =>  "Jordan", 
                                                "Kazakhstan"  =>  "Kazakhstan", 
                                                "Kenya"  =>  "Kenya", 
                                                "Kiribati"  =>  "Kiribati", 
                                                "Korea Democratic People's Republic of"  =>  "Korea Democratic People's Republic of", 
                                                "Korea Republic of"  =>  "Korea Republic of", 
                                                "Kuwait"  =>  "Kuwait", 
                                                "Kyrgyzstan"  =>  "Kyrgyzstan", 
                                                "Lao People's Democratic Republic"  =>  "Lao People's Democratic Republic", 
                                                "Latvia"  =>  "Latvia", 
                                                "Lebanon"  =>  "Lebanon", 
                                                "Lesotho"  =>  "Lesotho", 
                                                "Liberia"  =>  "Liberia", 
                                                "Libyan Arab Jamahiriya"  =>  "Libyan Arab Jamahiriya", 
                                                "Liechtenstein"  =>  "Liechtenstein", 
                                                "Lithuania"  =>  "Lithuania", 
                                                "Luxembourg"  =>  "Luxembourg", 
                                                "Macau"  =>  "Macau", 
                                                "Macedonia The Former Yugoslav Republic of"  =>  "Macedonia The Former Yugoslav Republic of", 
                                                "Madagascar"  =>  "Madagascar", 
                                                "Malawi"  =>  "Malawi", 
                                                "Malaysia"  =>  "Malaysia", 
                                                "Maldives"  =>  "Maldives", 
                                                "Mali"  =>  "Mali", 
                                                "Malta"  =>  "Malta", 
                                                "Marshall Islands"  =>  "Marshall Islands", 
                                                "Martinique"  =>  "Martinique", 
                                                "Mauritania"  =>  "Mauritania", 
                                                "Mauritius"  =>  "Mauritius", 
                                                "Mayotte    "  =>  "Mayotte",
                                                "Mexico "  =>  "Mexico",
                                                "Micronesia Federated States of"  =>  "Micronesia Federated States of", 
                                                "Moldova Republic of"  =>  "Moldova Republic of", 
                                                "Monaco "  =>  "Monaco",
                                                "Mongolia"  =>  "Mongolia", 
                                                "Montserrat"  =>  "Montserrat", 
                                                "Morocco"  =>  "Morocco", 
                                                "Mozambique"  =>  "Mozambique", 
                                                "Myanmar"  =>  "Myanmar", 
                                                "Namibia"  =>  "Namibia", 
                                                "Nauru"  =>  "Nauru", 
                                                "Nepal"  =>  "Nepal", 
                                                "Netherlands"  =>  "Netherlands", 
                                                "Netherlands Antilles"  =>  "Netherlands Antilles", 
                                                "New Caledonia"  =>  "New Caledonia", 
                                                "New Zealand"  =>  "New Zealand", 
                                                "Nicaragua"  =>  "Nicaragua", 
                                                "Niger"  =>  "Niger", 
                                                "Nigeria"  =>  "Nigeria", 
                                                "Niue"  =>  "Niue", 
                                                "Norfolk Island"  =>  "Norfolk Island", 
                                                "Northern Mariana Islands"  =>  "Northern Mariana Islands", 
                                                "Norway"  =>  "Norway", 
                                                "Oman"  =>  "Oman", 
                                                "Pakistan"  =>  "Pakistan", 
                                                "Palau"  =>  "Palau", 
                                                "Panama "  =>  "Panama",
                                                "Papua New Guinea"  =>  "Papua New Guinea", 
                                                "Paraguay"  =>  "Paraguay", 
                                                "Peru"  =>  "Peru", 
                                                "Philippines"  =>  "Philippines", 
                                                "Pitcairn"  =>  "Pitcairn", 
                                                "Poland"  =>  "Poland", 
                                                "Portugal"  =>  "Portugal", 
                                                "Puerto Rico"  =>  "Puerto Rico", 
                                                "Qatar"  =>  "Qatar", 
                                                "Reunion"  =>  "Reunion", 
                                                "Romania"  =>  "Romania", 
                                                "Russian Federation "  =>  "Russian Federation",
                                                "Rwanda"  =>  "Rwanda", 
                                                "Saint Kitts and Nevis"  =>  "Saint Kitts and Nevis", 
                                                "Saint Lucia"  =>  "Saint Lucia", 
                                                "Saint Vincent and the Grenadines"  =>  "Saint Vincent and the Grenadines", 
                                                "Samoa  "  =>  "Samoa",
                                                "San Marino"  =>  "San Marino", 
                                                "Sao Tome and Principe"  =>  "Sao Tome and Principe", 
                                                "Saudi Arabia"  =>  "Saudi Arabia", 
                                                "Senegal"  =>  "Senegal", 
                                                "Seychelles"  =>  "Seychelles", 
                                                "Sierra Leone"  =>  "Sierra Leone", 
                                                "Singapore"  =>  "Singapore", 
                                                "Slovakia (Slovak Republic)"  =>  "Slovakia (Slovak Republic)", 
                                                "Slovenia"  =>  "Slovenia", 
                                                "Solomon Islands"  =>  "Solomon Islands", 
                                                "Somalia"  =>  "Somalia", 
                                                "South Africa"  =>  "South Africa", 
                                                "South Georgia and the South Sandwich Islands"  =>  "South Georgia and the South Sandwich Islands", 
                                                "Spain"  =>  "Spain", 
                                                "Sri Lanka"  =>  "Sri Lanka", 
                                                "St. Helena"  =>  "St. Helena", 
                                                "St. Pierre and Miquelon"  =>  "St. Pierre and Miquelon", 
                                                "Sudan"  =>  "Sudan", 
                                                "Suriname"  =>  "Suriname", 
                                                "Svalbard and Jan Mayen Islands"  =>  "Svalbard and Jan Mayen Islands", 
                                                "Swaziland"  =>  "Swaziland", 
                                                "Sweden"  =>  "Sweden", 
                                                "Switzerland"  =>  "Switzerland", 
                                                "Syrian Arab Republic"  =>  "Syrian Arab Republic", 
                                                "Taiwan Province of China"  =>  "Taiwan Province of China", 
                                                "Tajikistan"  =>  "Tajikistan", 
                                                "Tanzania United Republic of"  =>  "Tanzania United Republic of", 
                                                "Thailand"  =>  "Thailand", 
                                                "Togo"  =>  "Togo", 
                                                "Tokelau"  =>  "Tokelau", 
                                                "Tonga"  =>  "Tonga", 
                                                "Trinidad and Tobago"  =>  "Trinidad and Tobago", 
                                                "Tunisia"  =>  "Tunisia", 
                                                "Turkey"  =>  "Turkey", 
                                                "Turkmenistan"  =>  "Turkmenistan", 
                                                "Turks and Caicos Islands"  =>  "Turks and Caicos Islands", 
                                                "Tuvalu"  =>  "Tuvalu", 
                                                "Uganda"  =>  "Uganda", 
                                                "Ukraine"  =>  "Ukraine", 
                                                "United Arab Emirates   "  =>  "United Arab Emirates",
                                                "United Kingdom"  =>  "United Kingdom", 
                                                "United States"  =>  "United States", 
                                                "United States Minor Outlying Islands"  =>  "United States Minor Outlying Islands", 
                                                "Uruguay"  =>  "Uruguay", 
                                                "Uzbekistan"  =>  "Uzbekistan", 
                                                "Vanuatu"  =>  "Vanuatu", 
                                                "Venezuela"  =>  "Venezuela", 
                                                "Vietnam"  =>  "Vietnam", 
                                                "Virgin Islands (British)"  =>  "Virgin Islands (British)", 
                                                "Virgin Islands (U.S.)"  =>  "Virgin Islands (U.S.)", 
                                                "Wallis and Futuna Islands  "  =>  "Wallis and Futuna Islands",
                                                "Western Sahara"  =>  "Western Sahara", 
                                                "Yemen"  =>  "Yemen", 
                                                "Yugoslavia"  =>  "Yugoslavia", 
                                                "Zambia"  =>  "Zambia", 
                                                "Zimbabwe"  =>  "Zimbabwe"], "Kenya", ['class' => 'form-control'])

                                                }}
                                  

                                          

                                        </div>
                                    




                                    <div class="field">
                                        <label for="email">E-Mail Address</label>

                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                    </div>

                                    <div class="field">
                                        <label for="password">Password</label>

                                             <input id="password" type="password" class="form-control" name="password">

                                            @if ($errors->has('password'))
                                                 <span class="help-block">
                                                     <strong>{{ $errors->first('password') }}</strong>
                                                 </span>
                                             @endif

                                    </div>

                                    <div class="field">
                                        <label for="password-confirm">Confirm Password</label>

                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                             @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                            @endif
                                    </div>

 
                        
                                    <div class="form-actions">

                                        <label for="accepted_terms">accept terms</label> 
                                        {{ Form::checkbox('accepted_terms', 1, null) }}
                                        {{ $errors->first('accepted_terms') }}
                                        
                                         <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-user"></i> Register
                                         </button>
                                    </div>
                  
                        
                 
                    
                
                           

           

                  </div>
                  </form>
  </div>
  </div>
  </div>








    <script type="text/javascript">

    $('#hide').click(function()
    {
        $('#content').hide('blind');
        $('#hide').hide();
        $('#show').show();

    });


    $('#show').click(function()
    {
        $('#content').show('blind');
        $('#show').hide();
        $('#hide').show();

    });    
    </script>

@endsection
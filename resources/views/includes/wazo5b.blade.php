
    <!-- NAVBAR -->
@if(!Auth::check())
    <ul id="wazo5">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about us') }}">About us</a></li>
<!-- rubber stamps in Kenya ............................ -->

        <li><a href="#">Stamps</a><span class="darrow">&#9660;</span>
            <ul class="sub1">
                <li><a href="#">Rubber stamps</a><span class="rarrow">&#9654;</span>
                    <ul class="sub2">
                         <li><a href="{{ route('categories.plain-text-self-inking-stamps') }}">Plain Text Self Inking</a></li>
                        
                        <li><a href="{{ route('categories.self-inking-rubber-stamps') }}">Self Inking Rubberstamps</a></li>
                        <li><a href="{{ route('categories.dateandtextstamps') }}">Date and Text stamps</a></li>
                       
                        <li><a href="{{ route('categories.heavy-duty-plain-and-dater-self-inking-stamps') }}">Heavy Duty Plain & Dater Self Inking</a></li>
                        <li><a href="{{ route('categories.pocket-stamps') }}">Pocket Stamps</a></li>
                        <li><a href="{{ route('categories.children-motivational-education-stamps') }}">Children Motivational Education stamps</a></li>
                        <li><a href="{{ route('categories.special-stamps-daters-text-and-numberers') }}">Special Stamps Daters, Text and Numberers</a></li>
                        
                    </ul>
                </li>

                <li><a href="{{ route('categories.traditional-die-plate-daters-default') }}">Traditional Die Plate Daters</a></li>

                <li><a href="{{ route('categories.stamp-accessories-default') }}">Stamp accessories</a></li>

                <li><a href="{{ route('categories.automatic-numbering-machines-default') }}">Automatic Numbering Machines</a></li>

                <li><a href="{{ route('categories.wooden-stamps-default') }}">Wooden stamps</a></li>
                
            </ul>
        </li>

<!-- Company seals in Kenya ............................ -->

        <li><a href="{{ route('categories.company-seals-default') }}">Company Seals</a></li>

<!-- .................................................... -->

        <li><a href="{{ route('magazine') }}"><i class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i> Blog</a></li>
        <li><a href="{{ route('contact') }}"><i class="fa fa-address-book fa-lg" aria-hidden="true"></i> Contact us</a></li>
        <li><a href="{{ route('signin') }}"><i class="fa fa-sign-in fa-lg" aria-hidden="true"></i> Login</a></li>
        <li><a href="{{ route('registration form') }}"><i class="fa fa-briefcase fa-lg" aria-hidden="true"></i>sign up</a></li>

        
    </ul>

@else

    <ul id="wazo5">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('about us') }}">About us</a></li>
<!-- rubber stamps in Kenya ............................ -->

        <li><a href="#">Stamps</a><span class="darrow">&#9660;</span>
            <ul class="sub1">
                <li><a href="#">Rubber stamps</a><span class="rarrow">&#9654;</span>
                    <ul class="sub2">
                         <li><a href="{{ route('categories.plain-text-self-inking-stamps') }}">Plain Text Self Inking</a></li>
                        
                        <li><a href="{{ route('categories.self-inking-rubber-stamps') }}">Self Inking Rubberstamps</a></li>
                        <li><a href="{{ route('categories.dateandtextstamps') }}">Date and Text stamps</a></li>
                        
                        <li><a href="{{ route('categories.heavy-duty-plain-and-dater-self-inking-stamps') }}">Heavy Duty Plain & Dater Self Inking</a></li>
                        <li><a href="{{ route('categories.pocket-stamps') }}">Pocket Stamps</a></li>
                        <li><a href="{{ route('categories.children-motivational-education-stamps') }}">Children Motivational Education stamps</a></li>
                        <li><a href="{{ route('categories.special-stamps-daters-text-and-numberers') }}">Special Stamps Daters, Text and Numberers</a></li>
                        
                    </ul>
                </li>

                <li><a href="{{ route('categories.traditional-die-plate-daters-default') }}">Traditional Die Plate Daters</a></li>

                <li><a href="{{ route('categories.stamp-accessories-default') }}">Stamp accessories</a></li>

                <li><a href="{{ route('categories.automatic-numbering-machines-default') }}">Automatic Numbering Machines</a></li>

                <li><a href="{{ route('categories.wooden-stamps-default') }}">Wooden stamps</a></li>
                
            </ul>
        </li>

<!-- Company seals in Kenya ............................ -->

        <li><a href="{{ route('categories.company-seals-default') }}">Company Seals</a></li>

<!-- .................................................... -->

        <li><a href="{{ route('magazine') }}"><i class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i> Blog</a></li>
        <li><a href="{{ route('contact') }}"><i class="fa fa-address-book fa-lg" aria-hidden="true"></i> Contact us</a></li>
        <li><a href="{{ url('/cart') }}"><i class="fa fa-shopping-basket fa-lg" aria-hidden="true"></i> My Shopping</a></li>
        <li><a href="{{ route('logout') }}"><i class="fa fa-sign-out fa-lg" aria-hidden="true"></i> Logout</a></li>


        
    </ul>



@endif





<script type="text/javascript">
    $(document).ready(function () {
        
        $('#m-nav').click(function() {

            $('#wazo5').toggleClass('show');

            

        });
    }); 
</script>

    <!-- Use a container to wrap the slider, the purpose is to enable slider to always fit width of the wrapper while window resize -->

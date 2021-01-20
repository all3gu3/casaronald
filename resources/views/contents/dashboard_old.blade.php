<div id="content">
    <div class="row">
        <div class="col-md-1" id="_sidenav">
            <div class="row">
                <div class="col-md-6" id="_sidenav_1">
                    <table id="menu_table">
                        <tr>
                            <td id="s_icon"></td><td><img src="{{asset('images/icons/icon.png')}}" height="25px"></td>
                        </tr>
                        <tr class="sep">
                            <td></td><td></td>
                        </tr>
                        <tr>
                            <td id="s_profile"></td> <td><img src="{{asset('images/icons/profile.png')}}" height="25px"></td>
                        </tr>
                        <tr class="sep">
                            <td></td><td></td>
                        </tr>
                        <tr>
                            <td id="s_classic"></td> <td><img src="{{asset('images/icons/classic.png')}}" height="25px"></td>
                        </tr>
                        <tr>
                            <td id="s_bullet"></td> <td><img src="{{asset('images/icons/bullet.png')}}" height="25px"></td>
                        </tr>
                        <tr>
                            <td id="s_time"></td> <td><img src="{{asset('images/icons/time.png')}}" height="25px"></td>
                        </tr>
                        <tr class="sep">
                            <td></td><td></td>
                        </tr>
                        <tr>
                            <td id="s_rank"></td> <td><img src="{{asset('images/icons/rank.png')}}" height="25px"></td>
                        </tr>
                        <tr class="sep">
                            <td></td><td></td>
                        </tr>
                        <tr>
                            <td id="s_options"></td> <td><img src="{{asset('images/icons/options.png')}}" height="25px"></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6 hidden" id="_sidenav_2" style="background-color: #292c38">
                </div>

            </div>
        </div>
        <div class="col-md-11">
            <p>fsansdfalkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
            <p>fsansdfalkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
            <p>fsansdfalkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
            <p>fsansdfalkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
            <p>fsansdfalkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
            <p>fsansdfalkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
            <p>fsansdfalkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
            <p>fsansdfalkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
            <p>fsansdfalkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
            <p>fsansdfalkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
            <p>fsansdfalkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
            <p>fsansdfalkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
            <p>fsansdfalkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>
            <p>fsansdfalkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</p>

            
        </div>
    </div>  
</div>
<script>
    $('#menu_table').hover(function() {
        var td1 = document.getElementById('s_profile');
        var text = document.createTextNode("My Profile");
        td1.appendChild(text);
        
        var td2 = document.getElementById('s_classic');
        var text = document.createTextNode("Classic");
        td2.appendChild(text);

        var td3 = document.getElementById('s_bullet');
        var text = document.createTextNode("Bullet");
        td3.appendChild(text);
    });
</script>
<div class="c100 green">
<span><div><img src="{{ asset('img/lvl.png') }}"><p>Level  {{$progression_data['lvl']}}</p></div></span>
        <div class="slice" <?php $num=$progression_data['progression_%']; if($num>50) echo 'style="clip: rect(auto, auto, auto, auto);"' ?>>
          <div class="bar addafter" style="<?php 
          echo "-moz-transform: rotate(".(3.6* $num)."deg);
          -ms-transform: rotate(".(3.6* $num)."deg);
          -webkit-transform: rotate(".(3.6* $num)."deg);
          transform: rotate(".(3.6* $num)."deg);";?>">
          </div>
          <div class="fill <?php if($num > 50) echo "circle_over_50";?>" style="<?php 
          echo "-moz-transform: rotate(".(3.6* $num)."deg);
          -ms-transform: rotate(".(3.6* $num)."deg);
          -webkit-transform: rotate(".(3.6* $num)."deg);
          transform: rotate(".(3.6* $num)."deg);";
          ?>"></div>
        </div>
</div>
<p class='xp'>{{$progression_data['current_xp']}} / {{$progression_data['xp_needed']}} XP</p>
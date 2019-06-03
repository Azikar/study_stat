<div class='skill_bar_pos'>
    <div class ='mastery_progression_title'>
        <span class="language">{{$master->title}}</span>
        <span class="mastery">{{$master->mastery}}</span>
    </div>
    <div class='skill_container'>
        @for($i = 0; $i < 100; $i += 20)
    <div class="spliter" style="left:{{$i}}%"></div>
        @endfor
            <div class="skills" style="width:{{$master->percentage}}%; background-color:{{$master->color}};"></div>
    </div>
</div>
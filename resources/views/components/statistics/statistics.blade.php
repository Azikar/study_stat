<div class="statistics statistics_hold">
        @component('components.completion.completion',[
                'amount' => $statistics['total_certificates'],
                'title'=>'Certificates Earned',
                'img'=>'cert.png'
             ])
        @endcomponent
        @component('components.completion.completion',[
                'amount' => $statistics['total_courses'],
                'title'=>'Courses Completed',
                'img'=>'book.png'
             ])
        @endcomponent
        @component('components.completion.completion',[
                'amount' => round($statistics['total_hours']),
                'title'=>'Hours Spent Studying',
                'img'=>'time.png'
             ])
        @endcomponent
</div>
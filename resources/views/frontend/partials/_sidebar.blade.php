<div class="sidebar-item">
    <div class="sidebar-section-title">
        <h3>Latest Notice</h3>
    </div>
    <div class="sidebar-section-content">
        @if($notices)
            <div class="notice-items">
                @foreach ($notices as $key => $notice)
                    <div class="notice-item">
                        <p><a href="">{{ $notice->title }}</a></p>
                        <div class="publish_date">{{ user_formatted_date($notice->publish_date) }}</div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
<div class="sidebar-item">
    <div class="sidebar-section-title">
        <h3>Latest Notice</h3>
    </div>
    <div class="sidebar-section-content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aliquam placeat cupiditate nostrum quasi possimus officiis quia laudantium dicta odio! Suscipit placeat sed voluptates ipsum ad?</p>
    </div>
</div>   
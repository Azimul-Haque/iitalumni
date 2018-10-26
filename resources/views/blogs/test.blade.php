


{{ $blog->title }}<br/>
{!! $blog->body !!}
{{ substr(strip_tags($blog->body), 0, stripos($blog->body, " ", stripos(strip_tags($blog->body), " ")+150))." [...] " }}
                  
{{-- solved the strong, em and p problem --}}
@if(substr_count(substr($blog->body, 0, stripos($blog->body, " ", stripos(strip_tags($blog->body), " ")+150)), "<strong>") == substr_count(substr($blog->body, 0, stripos($blog->body, " ", stripos(strip_tags($blog->body), " ")+150)), "</strong>"))

@else
  </strong>
@endif
@if(substr_count(substr($blog->body, 0, stripos($blog->body, " ", stripos(strip_tags($blog->body), " ")+150)), "<b>") == substr_count(substr($blog->body, 0, stripos($blog->body, " ", stripos(strip_tags($blog->body), " ")+150)), "</b>"))

@else
  </b>
@endif
@if(substr_count(substr($blog->body, 0, stripos($blog->body, " ", stripos(strip_tags($blog->body), " ")+150)), "<em>") == substr_count(substr($blog->body, 0, stripos($blog->body, " ", stripos(strip_tags($blog->body), " ")+150)), "</em>"))

@else
  </em>
@endif
@if(substr_count(substr($blog->body, 0, stripos($blog->body, " ", stripos(strip_tags($blog->body), " ")+150)), "<p>") == substr_count(substr($blog->body, 0, stripos($blog->body, " ", stripos(strip_tags($blog->body), " ")+150)), "</p>"))
@else
  </p>
@endif
{{-- solved the strong, em and p problem --}}
{{#each posts}}
<div class="inside-content">
    <h1><strong>{{id}}: </strong><a href="/posts/{{id}}">{{title}}</a></h1>
    <div id=""></div>
    <div class="text-left"><img width="50px" height="50px" style="border-radius:50%" src="{{user.avatar}}" alt="hell">{{user.name}} <time class="text-muted">{{created_at}}</time></div>
    <div class="excerpt">{{excerpt}}</div>

</div>
{{/each}}
{{#each posts}}
<div class="inside-content">
    <div class="home-image"></div>
    <h1><a href="/posts/{{id}}">{{title}}</a></h1>
    <p>{{excerpt}}</p>
    <div class = "text-muted">{{created_at}}</div>
    <div><img height="50px" width="50px" style="border-radius:50%" src="{{user.avatar}}" alt="">{{user.name}}</div>
</div>
{{/each}}
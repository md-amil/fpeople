{{#each posts}}
<div class="inside-content">
    <div class="home-image"></div>
    <h1><a href="/posts/{{id}}">{{title}}</a></h1>
    <p>{{excerpt}}</p>
    <div>{{created_at}}</div>
    <div>{{user.name}}</div>
</div>
{{/each}}
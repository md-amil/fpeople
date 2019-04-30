{{#each posts}}
<div class="inside-content">
    <h1><strong>{{id}}: </strong>{{title}}</h1>
    <div id="posts-img"></div>
    <div class="text-left">{{user.name}} <time class="text-muted">{{created_at}}</time></div>
    <div class="excerpt">{{excerpt}}</div>

</div>
{{/each}}
{{#if comments.length}}
<div class="card">
    <div class="card-body">
      {{#each comments}}
      <div class="comment-sec">
          <div class="user">{{ user.name }}:</div>
          <div class="comment-text">{{ comment }}
            <hr />
          </div>
      </div>
      {{/each}}
  </div>
</div>
{{else}}
<h3 class="text-center">No comments</h3>
{{/if}}
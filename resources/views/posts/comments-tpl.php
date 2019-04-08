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
<!-- Comments Box -->
<!-- Adapted from: https://codepen.io/magnus16/pen/buGiB?editors=1100 -->
<div class="detailBox">
    <div class="titleBox">
      <label>Leave a Comment<span id="required-notice" style="color:red;display:none;">&nbsp;*These fields are required</span></label>

      <form class="form-inline" 
      		onsubmit="return addMessage(document.querySelector('input[name=\'name-field\']').value, document.querySelector('input[name=\'comment-field\']').value);">
            <div class="form-group comment-input">
                <input class="form-control"
                       name="name-field"
                       id="name"
                       type="text" 
                       placeholder="Your name"
                       maxlength="30" />
            </div>
            <div class="form-group comment-input">
                <input class="form-control"
                       name="comment-field"
                       id="comment"
                       type="text" 
                       placeholder="Your comment" 
                       maxlength="140" />
            </div>
            <div class="form-group comment-btn">
                <button type="submit"
                		value="submit" 
                		class="btn btn-default"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></button>
            </div>
        </form>

    </div>
    <div class="actionBox">
        <ul id="commentList">
        </ul>
    </div>
</div>
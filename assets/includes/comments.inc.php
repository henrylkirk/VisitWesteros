<!-- Comments Box -->
<!-- Adapted from: https://codepen.io/magnus16/pen/buGiB?editors=1100 -->
<div class="detailBox">
    <div class="titleBox">
      <label>Comment Box</label>
    </div>
    <div class="actionBox">
        <ul class="commentList">
            <li>
                <div class="commentText">
                    <span class="name">Henry Kirk</span>
                    <p>Hello this is a test comment.</p> 
                </div>
            </li>
            <li>
                <div class="commentText">
                     <span class="name">Spencer Suhr</span>
                    <p>Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p>
                </div>
            </li>
            <li>
                <div class="commentText">
                    <span class="name">John Smith</span>
                    <p>Hello this is a test comment.</p>
                </div>
            </li>
        </ul>
        <form class="form-inline" role="form">
            <div class="form-group" style="position: relative; top: 15px;">
                <input class="form-control"
                       name="name"
                       id="name"
                       type="text" 
                       placeholder="Your name"
                       maxlength="30" />
            </div>
            <div class="form-group">
                <input class="form-control"
                       name="comment"
                       id="comment"
                       type="text" 
                       placeholder="Your comment" 
                       maxlength="30" />
            </div>
            <div class="form-group" style="width:19%;">
                <button class="btn btn-default">Add</button>
            </div>
        </form>
    </div>
</div>
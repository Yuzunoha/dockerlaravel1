<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8" />
  <title>teachapi</title>
</head>

<body>
  <h1>プロフィール</h1>
  <p id="profile"></p>

  <h1>ユーザー登録</h1>
  <input id="signUpName" type="text" placeholder="name" />
  <input id="signUpBio" type="text" placeholder="bio" />
  <input id="signUpEmail" type="text" placeholder="email" />
  <input id="signUpPassword" type="text" placeholder="password" />
  <input id="signUpPasswordConfirmation" type="text" placeholder="password_confirmation" />
  <button onclick="onclickButtonSignUp()">送信</button>

  <h1>ユーザーログイン</h1>
  <input id="signInEmail" type="text" placeholder="email" />
  <input id="signInPassword" type="text" placeholder="password" />
  <input id="signInPasswordConfirmation" type="text" placeholder="password_confirmation" />
  <button onclick="onclickButtonSignIn()">送信</button>

  <h1>ユーザー一覧</h1>
  <input id="usersGetPage" type="text" placeholder="page" />
  <input id="usersGetLimit" type="text" placeholder="limit" />
  <input id="usersGetQuery" type="text" placeholder="query" />
  <button onclick="onclickButtonUsersGet()">送信</button>

  <h1>ユーザー編集</h1>
  <input id="usersPutId" type="text" placeholder="id" />
  <input id="usersPutName" type="text" placeholder="name" />
  <input id="usersPutBio" type="text" placeholder="bio" />
  <button onclick="onclickButtonUsersPut()">送信</button>

  <h1>ユーザー削除</h1>
  <input id="usersDeleteId" type="text" placeholder="id" />
  <button onclick="onclickButtonUsersDelete()">送信</button>

  <h1>ユーザーのタイムライン</h1>
  <input id="usersTimelineId" type="text" placeholder="id" />
  <input id="usersTimelinePage" type="text" placeholder="page" />
  <input id="usersTimelineLimit" type="text" placeholder="limit" />
  <input id="usersTimelineQuery" type="text" placeholder="query" />
  <button onclick="onclickButtonUsersTimeline()">送信</button>

  <h1>投稿作成</h1>
  <input id="postsPostText" type="text" placeholder="text" />
  <button onclick="onclickButtonPostsPost()">送信</button>

  <h1>投稿編集</h1>
  <input id="postsPutId" type="text" placeholder="id" />
  <input id="postsPutText" type="text" placeholder="text" />
  <button onclick="onclickButtonPostsPut()">送信</button>

  <h1>投稿削除</h1>
  <input id="postsDeleteId" type="text" placeholder="id" />
  <button onclick="onclickButtonPostsDelete()">送信</button>

  <h1>投稿一覧</h1>
  <input id="postsGetPage" type="text" placeholder="page" />
  <input id="postsGetLimit" type="text" placeholder="limit" />
  <input id="postsGetQuery" type="text" placeholder="query" />
  <button onclick="onclickButtonPostsGet()">送信</button>

  <h1>フォロー</h1>
  <input id="followPostId" type="text" placeholder="id" />
  <button onclick="onclickButtonFollowPost()">送信</button>

  <h1>アンフォロー</h1>
  <input id="followDeleteId" type="text" placeholder="id" />
  <button onclick="onclickButtonFollowDelete()">送信</button>

  <script src="./main.js"></script>
</body>

</html>

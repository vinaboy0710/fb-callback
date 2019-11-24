$fb = new Facebook\Facebook([
  '2632212860169522' => '{app-id}', // Replace {app-id} with your app id
  '133eead69318cef1a838274422606079' => '{app-secret}',
  'default_graph_version' => 'v5.0',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://github.com/vinaboy0710/fb-callback/blob/master/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';

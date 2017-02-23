function logout()
{
    gapi.auth.signOut();
    location.reload();
}
function googlePlusLogin()
{
    var myParams = {
        'clientid': '345316919697-tgbee5p1pej00q3npooh29atlig2elim.apps.googleusercontent.com',
        'cookiepolicy': 'single_host_origin',
        'callback': 'loginCallback',
        'approvalprompt': 'force',
        'scope': 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/plus.profile.emails.read'
    };
    gapi.auth.signIn(myParams);
}

function loginCallback(result)
{
    if (result['status']['signed_in'])
    {
        var request = gapi.client.plus.people.get(
                {
                    'userId': 'me'
                });
        request.execute(function (resp)
        {
            var email = '';
            if (resp['emails'])
            {
                for (i = 0; i < resp['emails'].length; i++)
                {
                    if (resp['emails'][i]['type'] == 'account')
                    {
                        email = resp['emails'][i]['value'];
                    }
                }
            }
            console.log(resp);
        });
    }
}
function onLoadCallback()
{
    gapi.client.setApiKey('AIzaSyDoBY3BLEyQnoF1uOIqTlCrt0el0FtXqUw');
    gapi.client.load('plus', 'v1', function () {});
}

(function () {
    var po = document.createElement('script');
    po.type = 'text/javascript';
    po.async = true;
    po.src = 'https://apis.google.com/js/client.js?onload=onLoadCallback';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(po, s);
})();
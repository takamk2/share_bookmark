function showAlert() {
    const title = document.getElementById('title').value;
    const url = document.getElementById('url').value;
    const description = document.getElementById('description').value;
    const apiToken = document.getElementById('api_token').value;
    alert(apiToken);

    fetch('http://localhost/api/bookmarks/add', {
        method: 'post',
        headers: {
            'Content-Type': 'application/json',
            // 'Authorization': 'Bearer oi8oxCx7okKK3akxF6AB3ShPvehquqU2OAC7d72y',
            'Authorization': 'Bearer ' + apiToken,
        },
        body: JSON.stringify({
            url: url,
            title: title,
            description: description,
        })
    }).then(r => r.text()).then(result => {
        alert(result);
    })
}

function saveApiToken() {
    const apiToken = document.getElementById('api_token').value;
    chrome.storage.sync.set({ apiToken: apiToken }, function (result) {
        console.log(result);
    });
}

chrome.storage.sync.get(['apiToken'], function (result) {
    const apiToken = result.apiToken
    const apiTokenElem = document.getElementById('api_token');
    apiTokenElem.value = apiToken;
});

(async () => {
    const queryInfo = { active: true, currentWindow: true };
    const [tab] = await chrome.tabs.query(queryInfo)

    const titleElem = document.getElementById('title');
    titleElem.value = tab.title;

    const urlElem = document.getElementById('url');
    urlElem.value = tab.url;
})();

document.getElementById('alertButton').onclick = function () {
    saveApiToken();
    showAlert();
};

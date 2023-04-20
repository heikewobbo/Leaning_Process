const search = document.querySelector('.latestflt-div button');

search.addEventListener('click', () => {
    const pilotid = document.querySelector('.latestflt-div input').value;

    if (pilotid === '')
        return;

    fetch(`https://www.simbrief.com/system/dispatch.php?editflight=last&static_id=${pilotid}`)
        .then(response => response.json())
});
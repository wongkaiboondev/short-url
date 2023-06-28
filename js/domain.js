let domain = "localhost/url/";
shortenURL.value = domain + data;
copyIcon.onclick = ()=>{
    shortenURL.select();
    document.execCommand("copy");
}



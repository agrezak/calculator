export async function postData(url, data) {
    await fetch(url, {
        method: 'POST',
        body: JSON.stringify(data),
        headers:{
          'Access-Control-Allow-Origin': 'http://localhost:8080',
          'Access-Control-Allow-Methods': 'GET, POST, HEAD, OPTIONS, PUT, DELETE, PATCH',
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        }
    }).then(res => console.warn(res));
}

export function qs(el) {
    if (!el) {
        throw new Error('Query selector must be provided');
    }
    return document.querySelector(el);
}
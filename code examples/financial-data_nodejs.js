import fetch from 'node-fetch';

const username = 'YOUR_USERNAME';
const password = 'YOUR_PASSWORD';
const body = {
  'source': 'universal',
  'url': 'https://www.syntaxdata.com/affinity?_gl=1*1ozt4xh*_up*mq..*_ga*mtuyntq3ntm5lje3mdi1ndixotc.*_ga_v0892cy751*mtcwmju0mje5ni4xljaumtcwmju0mje5ni4wljauma..'};
  
const response = await fetch('https://realtime.oxylabs.io/v1/queries', {
  method: 'post',
  body: JSON.stringify(body),
  headers: {
    'Content-Type': 'application/json',
    'Authorization': 'Basic ' + Buffer.from(`${username}:${password}`).toString('base64'),
  }
});

console.log(await response.json());
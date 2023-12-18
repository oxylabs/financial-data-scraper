import requests
from pprint import pprint

# Structure payload.
payload = {
    'source': 'universal',
    'url': 'https://www.syntaxdata.com/affinity?_gl=1*1ozt4xh*_up*mq..*_ga*mtuyntq3ntm5lje3mdi1ndixotc.*_ga_v0892cy751*mtcwmju0mje5ni4xljaumtcwmju0mje5ni4wljauma..'
}

# Get response.
response = requests.request(
    'POST',
    'https://realtime.oxylabs.io/v1/queries',
    auth=('user', 'pass1'),
    json=payload,
)

# Instead of response with job status and results url, this will return the
# JSON response with the result.
pprint(response.json())
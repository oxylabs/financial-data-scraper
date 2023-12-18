# Financial-Data Scraper API

[![Oxylabs promo code](https://user-images.githubusercontent.com/129506779/250792357-8289e25e-9c36-4dc0-a5e2-2706db797bb5.png)](https://oxylabs.go2cloud.org/aff_c?offer_id=7&aff_id=877&url_id=112)

Oxylabs’ [Financial-Data Scraper](https://oxylabs.io/products/scraper-api/web/financial-data-scraper?utm_source=github&utm_medium=repositories&utm_campaign=product) is a data gathering solution allowing you to extract real-time information from an Financial-Data website effortlessly. This brief guide explains how an Financial-Data Scraper works and provides code examples to understand better how you can use it hassle-free.

### How it works

You can get Financial-Data results by providing your own URLs to our service. We can return the HTML for any Financial-Data page you like.

#### Python code example

The example below illustrates how you can get HTML of Financial-Data page.

```python
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
```
Find code examples for other programming languages [**here**](https://github.com/oxylabs/financial-data-scraper/tree/main/code%20examples)

#### Output Example
```json
{
  "results": [
    {
      "content": "<!DOCTYPE html>\n<html lang=\"en\">\n  <head>\n      <script\n    id=\"Cookiebot\"\n    src=\"https://consent. ... </html>",
      "created_at": "2023-12-18 11:32:29",
      "updated_at": "2023-12-18 11:32:30",
      "page": 1,
      "url": "https://www.syntaxdata.com/affinity?_gl=1*1ozt4xh*_up*mq..*_ga*mtuyntq3ntm5lje3mdi1ndixotc.*_ga_v0892cy751*mtcwmju0mje5ni4xljaumtcwmju0mje5ni4wljauma..",
      "job_id": "7142476715002970113",
      "status_code": 200
    }
  ]
}
```
With our Financial-Data Scraper, you can seamlessly collect important financial figures and statistics from any Financial-Data web page. Harness data such as market trends, stock prices, company financials, or investor sentiments to understand the financial landscape and outperform your competitors. If any queries arise, our support team is just a live chat or email away at hello@oxylabs.io.
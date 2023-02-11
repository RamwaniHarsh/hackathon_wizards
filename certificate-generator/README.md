## PSPDFKit API Certificate Example

This is a PDF Generator API example that creates a certificate PDF from HTML. Replace the `your_api_key_here` placeholder with your live API key from https://dashboard.pspdfkit.com/api_keys/ and run this command:

```
curl -X POST https://api.pspdfkit.com/build \
  -H "Authorization: Bearer your_api_key_here" \
  -o result.pdf \
  -F index.html=@index.html \
  -F Inter-Bold.ttf=@Inter-Bold.ttf \
  -F Inter-Medium.ttf=@Inter-Medium.ttf \
  -F Inter-Regular.ttf=@Inter-Regular.ttf \
  -F SpaceMono-Regular.ttf=@SpaceMono-Regular.ttf \
  -F logo.svg=@logo.svg \
  -F ribbon.svg=@ribbon.svg \
  -F instructions='{
       "parts": [{
         "html": "index.html",
         "assets": [
           "Inter-Bold.ttf",
           "Inter-Medium.ttf",
           "Inter-Regular.ttf",
           "SpaceMono-Regular.ttf",
           "logo.svg",
           "ribbon.svg"
         ]
       }]
     }'
```

The resulting PDF will be saved in the `result.pdf` directory.

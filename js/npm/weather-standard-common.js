(function (d) {
  var c = d.createElement('link')
  c.rel = 'stylesheet'
  c.href = 'https://apip.weatherdt.com/standard/static/css/weather-standard.css?v=2.0'
  var s = d.createElement('script')
  s.src = 'https://apip.weatherdt.com/standard/static/js/weather-standard.js?v=2.0'
  var sn = d.getElementsByTagName('script')[0]
  sn.parentNode.insertBefore(c, sn)
  sn.parentNode.insertBefore(s, sn)
})(document)
function showPdfModal(event, link) {
  event.preventDefault();
  var pdfUrl = link.getAttribute('href');
  var modal = document.getElementById('pdfModal');
  var pdfViewer = document.getElementById('pdfViewer');
  pdfViewer.src = pdfUrl;
  modal.style.display = 'block';
}

function closePdfModal() {
  var modal = document.getElementById('pdfModal');
  modal.style.display = 'none';
}

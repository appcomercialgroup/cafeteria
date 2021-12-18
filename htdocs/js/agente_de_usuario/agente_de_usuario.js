function nombre_de_navegador() {

	var w3Browser, w3UserAgent = navigator.userAgent;

	if (w3UserAgent.indexOf("Firefox") > -1) {

		w3Browser = "Mozilla Firefox";

	} else if (w3UserAgent.indexOf("SamsungBrowser") > -1) {

		w3Browser = "Samsung Internet";

	} else if (w3UserAgent.indexOf("Opera") > -1 || w3UserAgent.indexOf("OPR") > -1) {
		w3Browser = "Opera";

	} else if (w3UserAgent.indexOf("Trident") > -1) {

		w3Browser = "Internet Explorer";

	} else if (w3UserAgent.indexOf("Edge") > -1) {

		w3Browser = "Microsoft Edge";

	} else if (w3UserAgent.indexOf("Chrome") > -1) {

		w3Browser = "Google Chrome or Chromium";

	} else if (w3UserAgent.indexOf("Safari") > -1) {

		w3Browser = "Safari";

	} else {

		w3Browser = "Unknown";
	}

	return w3Browser;
}
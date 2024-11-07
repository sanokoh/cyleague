document.addEventListener("DOMContentLoaded", function () {
    function adjustContentSize() {
        var windowWidth = window.innerWidth;

        // 576px以下の場合はスタイルをリセットし、CSSでの設定に戻す
        if (windowWidth <= 576) {
            document.querySelectorAll('.image-block').forEach(element => {
                element.style.width = '';  // 幅をリセット
                element.style.height = ''; // 高さをリセット
                element.style.maxWidth = ''; // max-widthをリセット
            });
            document.querySelectorAll('.text-wrapper').forEach(element => {
                element.style.height = ''; // 高さをリセット
            });
            return; // 576px以下ではJavaScriptによるスタイル設定を行わない
        }

        // 高さの比率を定義、幅に基づいて高さも調整
        var widthPercentage = 0.5; // image-blockの通常の幅をウィンドウの80%に設定
        var heightToWidthRatio = 0.5625; // 例えば16:9の比率 (高さ = 幅 * 0.5625)

        // 画面幅が1350px以下の場合、image-blockのmax-widthを40%に設定
        if (windowWidth <= 1350) {
            document.querySelectorAll('.image-block').forEach(element => {
                element.style.maxWidth = '40%'; // 幅を40%に設定
            });
        } else {
            // 1350pxを超える場合、通常の幅と高さに戻す
            var newWidth = windowWidth * widthPercentage;
            var newHeight = newWidth * heightToWidthRatio; // 高さを幅に基づいて設定

            document.querySelectorAll('.image-block').forEach(element => {
                element.style.width = newWidth + 'px'; // 通常の幅
                element.style.height = newHeight + 'px'; // 通常の高さ
                element.style.maxWidth = ''; // max-widthをリセット
            });
        }

        // text-wrapperの高さをimage-blockの高さに合わせる
        var newHeight = windowWidth * widthPercentage * heightToWidthRatio;
        document.querySelectorAll('.text-wrapper').forEach(element => {
            element.style.height = newHeight + 'px'; // image-blockと同じ高さに設定
        });
    }

    // 初期設定
    adjustContentSize();

    // ウィンドウサイズ変更時にコンテンツサイズを調整
    window.addEventListener('resize', adjustContentSize);
});

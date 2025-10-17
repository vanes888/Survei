<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuesioner Survey</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            width: 100%;
            overflow: hidden;
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .header p {
            font-size: 14px;
            opacity: 0.9;
        }

        .form-content {
            padding: 40px 30px;
        }

        .question-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            padding: 20px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .question-card:hover {
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
            transform: translateY(-2px);
        }

        .question-title {
            color: #333;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 15px;
            line-height: 1.4;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
            font-size: 14px;
        }

        .required {
            color: #e74c3c;
            margin-left: 3px;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        select:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .radio-group,
        .checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .radio-option,
        .checkbox-option {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .radio-option:hover,
        .checkbox-option:hover {
            border-color: #667eea;
            background: #f0f3ff;
        }

        .radio-option input[type="radio"],
        .checkbox-option input[type="checkbox"] {
            margin-right: 12px;
            width: 20px;
            height: 20px;
            cursor: pointer;
            accent-color: #667eea;
            flex-shrink: 0;
        }

        .radio-option label,
        .checkbox-option label {
            margin: 0;
            cursor: pointer;
            flex: 1;
        }

        /* Slider Rating */
        .rating-slider-container {
            position: relative;
            margin: 30px 0 20px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 12px;
        }

        .rating-slider-track {
            position: relative;
            height: 14px;
            background: transparent;
            border-radius: 7px;
            margin: 50px 0 30px;
            padding: 0;
        }

        .rating-slider-track::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            width: var(--track-width, 75%);
            height: 100%;
            background: #e0e0e0;
            border-radius: 7px;
            z-index: 0;
        }

        .rating-slider-progress {
            position: absolute;
            height: 100%;
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            border-radius: 7px;
            width: 33.33%;
            transition: width 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            pointer-events: none;
            z-index: 1;
        }

        .rating-slider {
            display: none;
        }

        .rating-points {
            position: absolute;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            top: 0;
            left: 0;
            z-index: 6;
            padding: 0;
            box-sizing: border-box;
        }

        .rating-point {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            flex: 1;
            height: 28px;
            cursor: pointer;
        }

        .rating-point-dot {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: white;
            border: 3px solid #9ca3af;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            position: relative;
            z-index: 3;
        }

        .rating-point:hover .rating-point-dot {
            transform: scale(1.15);
            border-color: #667eea;
            box-shadow: 0 3px 14px rgba(102, 126, 234, 0.4);
        }

        .rating-point.active .rating-point-dot {
            background: #667eea;
            border-color: #667eea;
            transform: scale(1.35);
            box-shadow: 0 4px 16px rgba(102, 126, 234, 0.5);
        }

        .rating-point-emoji {
            position: absolute;
            top: -45px;
            font-size: 38px;
            opacity: 0;
            transform: scale(0.5) translateY(15px);
            transition: all 0.35s cubic-bezier(0.34, 1.56, 0.64, 1);
            pointer-events: none;
            white-space: nowrap;
        }

        .rating-point-emoji.show {
            opacity: 1 !important;
            transform: scale(1) translateY(0) !important;
        }

        .rating-labels {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-top: 20px;
            padding: 0;
            position: relative;
        }

        .rating-label {
            flex: 1;
            text-align: center;
            font-size: 11px;
            color: #666;
            line-height: 1.3;
            font-weight: 500;
            padding: 0;
        }

        .rating-value {
            text-align: center;
            margin-top: 20px;
            padding: 14px 20px;
            background: #f8f9fa;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            color: #999;
            font-weight: 600;
            font-size: 16px;
            display: block;
            transition: all 0.3s ease;
        }

        .rating-value.selected {
            background: linear-gradient(135deg, #f0f3ff 0%, #e6ebff 100%);
            border: 2px solid #667eea;
            color: #667eea;
            font-weight: 700;
            font-size: 18px;
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.15);
        }

        @media (max-width: 768px) {
            .rating-slider-container {
                padding: 15px;
            }

            .rating-slider-track {
                margin: 45px 0 25px;
            }

            .rating-labels {
                padding: 0;
            }

            .rating-label {
                font-size: 10px;
                padding: 0;
            }

            .rating-value {
                font-size: 16px;
                padding: 12px 16px;
            }

            .rating-point-emoji {
                font-size: 32px;
            }
        }

        .submit-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 30px;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.5);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        .back-btn {
            width: 100%;
            padding: 15px;
            background: #6c757d;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 30px;
            box-shadow: 0 5px 15px rgba(108, 117, 125, 0.4);
        }

        .back-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(108, 117, 125, 0.5);
        }

        .back-btn:active {
            transform: translateY(0);
        }

        .button-group {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .button-group .back-btn,
        .button-group .submit-btn {
            flex: 1;
            margin-top: 0;
        }

        .progress-bar {
            height: 4px;
            background: #e0e0e0;
            position: relative;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            width: 0%;
            transition: width 0.3s ease;
        }

        @media (max-width: 768px) {
            body {
                padding: 10px;
            }

            .container {
                border-radius: 15px;
            }

            .header {
                padding: 30px 20px;
            }

            .header h1 {
                font-size: 24px;
            }

            .form-content {
                padding: 30px 20px;
            }

            .button-group {
                flex-direction: column;
                gap: 10px;
            }
        }

        .success-message {
            display: none;
            text-align: center;
            padding: 40px;
            animation: fadeIn 0.5s ease-out;
        }

        .success-message.show {
            display: block;
        }

        .success-icon {
            font-size: 60px;
            margin-bottom: 20px;
        }

        .success-message h2 {
            color: #667eea;
            margin-bottom: 10px;
        }

        .success-message p {
            color: #666;
        }

        textarea {
            font-family: inherit;
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 14px;
            background: #f8f9fa;
            resize: vertical;
        }

        textarea:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        small {
            font-size: 12px;
        }

        /* Emoji Rating Buttons */
        .emoji-rating {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            margin-top: 10px;
        }

        .emoji-option {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 15px 10px;
            border: 3px solid #e0e0e0;
            border-radius: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .emoji-option:hover {
            border-color: #667eea;
            background: #f0f3ff;
            transform: scale(1.05);
        }

        .emoji-option input[type="radio"] {
            display: block;
            margin: 0 auto 10px;
            width: 20px;
            height: 20px;
            cursor: pointer;
            accent-color: #667eea;
        }

        .emoji-option.selected {
            border-color: #667eea;
            background: #f0f3ff;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }

        .emoji-icon {
            font-size: 40px;
            margin-bottom: 8px;
        }

        .emoji-text {
            font-size: 11px;
            font-weight: 600;
            color: #666;
            text-align: center;
        }

        .emoji-option.selected .emoji-text {
            color: #667eea;
        }
        
        /* Radio List Style */
        .radio-list {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .radio-list-option {
            display: flex;
            align-items: center;
            padding: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        .radio-list-option:hover {
            border-color: #667eea;
            background: #f0f3ff;
        }

        .radio-list-option input[type="radio"] {
            margin-right: 15px;
            width: 20px;
            height: 20px;
            cursor: pointer;
            accent-color: #667eea;
            flex-shrink: 0;
        }

        .radio-list-option label {
            margin: 0;
            cursor: pointer;
            flex: 1;
            line-height: 1.4;
        }
        
        /* Bagian Form Terpisah */
        .section-title {
            color: #667eea;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 25px;
            padding-bottom: 10px;
            border-bottom: 2px solid #667eea;
            display: flex;
            align-items: center;
        }
        
        .section-title::before {
            content: "📋";
            margin-right: 10px;
            font-size: 22px;
        }
        
        /* Captcha Styles */
        .captcha-container {
            display: none;
            text-align: center;
            padding: 30px;
            animation: fadeIn 0.5s ease-out;
        }
        
        .captcha-container.show {
            display: block;
        }
        
        .captcha-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            padding: 30px;
            margin-bottom: 20px;
        }
        
        .captcha-title {
            font-size: 20px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
        }
        
        .captcha-question {
            font-size: 24px;
            font-weight: 700;
            color: #667eea;
            margin-bottom: 20px;
        }
        
        .captcha-input {
            width: 100px;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 18px;
            text-align: center;
            margin: 0 auto 20px;
            transition: all 0.3s ease;
        }
        
        .captcha-input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }
        
        .captcha-refresh {
            background: #f8f9fa;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            padding: 10px 15px;
            color: #667eea;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-block;
            margin-bottom: 20px;
        }
        
        .captcha-refresh:hover {
            background: #f0f3ff;
            border-color: #667eea;
        }
        
        .captcha-error {
            color: #e74c3c;
            font-size: 14px;
            margin-top: 10px;
            display: none;
        }
        
        .captcha-error.show {
            display: block;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="progress-bar">
            <div class="progress-fill" id="progressBar"></div>
        </div>
        
        <div class="header">
            <h1>📊 Kuesioner Survey</h1>
            <p>Mohon isi data dengan lengkap dan benar</p>
        </div>

        <div class="form-content" id="formContent">
            <?php echo $content; ?>
        </div>

        <div class="success-message" id="thankYouMessage">
            <div class="success-icon">🙏</div>
            <h2>Terima Kasih!</h2>
            <p>Kami menghargai waktu yang Anda luangkan untuk membuka survey ini.</p>
            <p style="margin-top: 10px; color: #999; font-size: 14px;">Meskipun Anda tidak bersedia menjadi responden, partisipasi Anda tetap berarti bagi kami.</p>
        </div>

        <div class="success-message" id="successMessage">
            <div class="success-icon">✅</div>
            <h2>Terima Kasih!</h2>
            <p>Survey Anda telah berhasil dikirim</p>
        </div>
    </div>

    <script>
        const progressBar = document.getElementById('progressBar');
        const formContent = document.getElementById('formContent');
        const successMessage = document.getElementById('successMessage');
        const thankYouMessage = document.getElementById('thankYouMessage');
 
        function updateProgress(currentPart) {
            let progress = 0;
            if (currentPart === 1) {
                progress = 20;
            } else if (currentPart === 2) {
                progress = 40;
            } else if (currentPart === 3) {
                progress = 60;
            } else if (currentPart === 4) {
                progress = 80;
            } else if (currentPart === 5) {
                progress = 100;
            }
            progressBar.style.width = progress + '%';
        }

        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>
</body>
</html>

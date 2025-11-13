<?php
// questions.php

function get_questions() {
    // A complete array of questions 1-120 in both English and Hindi.
    return [
        1 => [
            'en' => ['question' => 'In self-directed learning, individuals:', 'options' => ['themselves take the necessary steps for formulating and evaluating their learning strategies', 'direct their students to follow specific learning strategies', 'seek the guidance of appropriate teachers for self-mastery', 'take the initiative to clear other people\'s doubts during the learning process', 'Question not attempted']],
            'hi' => ['question' => 'स्व-निर्देशित सीखने में, व्यक्ति:', 'options' => ['स्वयं अपनी सीखने की रणनीतियों को बनाने और मूल्यांकन के लिए आवश्यक कदम उठाते हैं', 'अपने छात्रों को विशिष्ट सीखने की रणनीतियों का पालन करने के लिए निर्देशित करते हैं', 'आत्म-निपुणता के लिए उपयुक्त शिक्षकों का मार्गदर्शन चाहते हैं', 'सीखने की प्रक्रिया के दौरान दूसरे लोगों के संदेह को दूर करने की पहल करते हैं', 'अनुत्तरित प्रश्न']]
        ],
        2 => [
            'en' => ['question' => 'One of the reasons for the need for self-directed learning is that:', 'options' => ['it is less challenging', 'it helps people to learn more things and learn better than those waiting to be taught', 'it is a more cost effective method of learning', 'it is a modern method of learning', 'Question not attempted']],
            'hi' => ['question' => 'स्व-निर्देशित सीखने की आवश्यकता का एक कारण यह है कि:', 'options' => ['यह कम चुनौतीपूर्ण है', 'यह लोगों को अधिक चीजें सीखने और सिखाए जाने की प्रतीक्षा करने वालों से बेहतर सीखने में मदद करता है', 'यह सीखने का एक अधिक लागत प्रभावी तरीका है', 'यह सीखने का एक आधुनिक तरीका है', 'अनुत्तरित प्रश्न']]
        ],
        3 => [
            'en' => ['question' => 'Which of the following best describes self-directed learning?', 'options' => ['Active learning', 'Passive learning', 'Compulsory learning', 'Repulsive learning', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित में से कौन स्व-निर्देशित सीखने का सबसे अच्छा वर्णन करता है?', 'options' => ['सक्रिय सीखना', 'निष्क्रिय सीखना', 'अनिवार्य सीखना', 'प्रतिकारक सीखना', 'अनुत्तरित प्रश्न']]
        ],
        4 => [
            'en' => ['question' => 'With reference to the passage, an essential aspect of maturing is:', 'options' => ['to develop the ability to learn from others', 'to be in tune with the psychological processes of development', 'to put heavy responsibility on today\'s learners', 'to develop the ability to take increasing responsibility of one\'s own life', 'Question not attempted']],
            'hi' => ['question' => 'गद्यांश के संदर्भ में, परिपक्व होने का एक अनिवार्य पहलू है:', 'options' => ['दूसरों से सीखने की क्षमता विकसित करना', 'विकास की मनोवैज्ञानिक प्रक्रियाओं के साथ तालमेल बिठाना', 'आज के शिक्षार्थियों पर भारी जिम्मेदारी डालना', 'अपने जीवन की बढ़ती जिम्मेदारी लेने की क्षमता विकसित करना', 'अनुत्तरित प्रश्न']]
        ],
        5 => [
            'en' => ['question' => 'Solve: 5.06 - 0.8 + 3.9 + 0.703 - 1.3472', 'options' => ['7.5158', '6.3158', '7.5162', '7.0102', 'Question not attempted']],
            'hi' => ['question' => 'हल करें: 5.06 - 0.8 + 3.9 + 0.703 - 1.3472', 'options' => ['7.5158', '6.3158', '7.5162', '7.0102', 'अनुत्तरित प्रश्न']]
        ],
        6 => [
            'en' => ['question' => 'The product of the largest and the smallest of the fractions 7/11, 8/15, 5/9 and 11/17 is:', 'options' => ['8/27', '88/255', '7/17', '35/99', 'Question not attempted']],
            'hi' => ['question' => 'भिन्नों 7/11, 8/15, 5/9 तथा 11/17 में से सबसे बड़ी तथा सबसे छोटी भिन्नों का गुणनफल है:', 'options' => ['8/27', '88/255', '7/17', '35/99', 'अनुत्तरित प्रश्न']]
        ],
        7 => [
            'en' => ['question' => 'When the numerator of a fraction is decreased by 15% and the denominator is decreased by 10%, the fraction becomes 6/9. The original fraction is:', 'options' => ['6/17', '4/5', '7/34', '5/18', 'Question not attempted']],
            'hi' => ['question' => 'जब किसी भिन्न के अंश को 15% कम कर दिया जाए और हर को 10% कम कर दिया जाए, तो भिन्न 6/9 हो जाती है। मूल भिन्न है:', 'options' => ['6/17', '4/5', '7/34', '5/18', 'अनुत्तरित प्रश्न']]
        ],
        8 => [
            'en' => ['question' => 'Akhilesh borrowed a certain sum on compound interest and returned it in 3 equal annual instalments of ₹ 46,305 each. If the rate of interest charged is 5% per annum, then find the sum borrowed.', 'options' => ['₹ 1,20,000', '₹ 1,25,000', '₹ 1,26,100', '₹ 1,26,200', 'Question not attempted']],
            'hi' => ['question' => 'अखिलेश ने कुछ राशि चक्रवृद्धि ब्याज पर उधार ली और उसे 3 बराबर वार्षिक किश्तों, प्रत्येक ₹ 46,305 में लौटा दिया। यदि 5% दर से ब्याज वसूला गया, तो उधार ली गई राशि ज्ञात करें।', 'options' => ['₹ 1,20,000', '₹ 1,25,000', '₹ 1,26,100', '₹ 1,26,200', 'अनुत्तरित प्रश्न']]
        ],
        9 => [
            'en' => ['question' => 'The HCF of x⁸−1 and x⁴+2x³−2x−1 is:', 'options' => ['x²−1', '(x²−1)(x²+1)', '(x²−1)(x+1)²', 'x²+1', 'Question not attempted']],
            'hi' => ['question' => 'x⁸−1 और x⁴+2x³−2x−1 का HCF है:', 'options' => ['x²−1', '(x²−1)(x²+1)', '(x²−1)(x+1)²', 'x²+1', 'अनुत्तरित प्रश्न']]
        ],
        10 => [
            'en' => ['question' => 'Hansa and Sunita are friends. Each one has some money. If Hansa gives ₹ 30 to Sunita, then Sunita will have twice the money left with Hansa. But if Sunita gives ₹ 10 to Hansa, then Hansa will have thrice as much as is left with Sunita. How much money does Hansa have?', 'options' => ['56', '84', '42', '62', 'Question not attempted']],
            'hi' => ['question' => 'हंसा और सुनीता सहेलियाँ हैं और प्रत्येक के पास कुछ धनराशि है। यदि हंसा, सुनीता को ₹ 30 देती है, तो सुनीता के पास हंसा के पास बचे धन का दोगुना धन होगा। परन्तु यदि सुनीता, हंसा को ₹10 देती है, तो हंसा के पास सुनीता के पास बचे धन का तीन गुना धन होगा। हंसा के पास कितनी धनराशि है?', 'options' => ['56', '84', '42', '62', 'अनुत्तरित प्रश्न']]
        ],
        11 => [
            'en' => ['question' => 'If mode of the observations 8, 14, 18, 20, 14, 15, 18, 16 and P is 18, then the median of these observations is:', 'options' => ['14', '15', '15.5', '16', 'Question not attempted']],
            'hi' => ['question' => 'यदि प्रेक्षणों 8, 14, 18, 20, 14, 15, 18, 16 और P का बहुलक 18 है, तो इन प्रेक्षणों का माध्यक है:', 'options' => ['14', '15', '15.5', '16', 'अनुत्तरित प्रश्न']]
        ],
        12 => [
            'en' => ['question' => 'If mean of the observations 7, 11, 18, 5, 4, 8 and k is 9, then find the mean deviation about the mean of the given observations.', 'options' => ['3 1/7', '3 2/7', '3 4/7', '3 5/7', 'Question not attempted']],
            'hi' => ['question' => 'यदि प्रेक्षणों 7, 11, 18, 5, 4, 8 और k का माध्य 9 है, तो दिए गए प्रेक्षणों के माध्य के सापेक्ष माध्य विचलन ज्ञात कीजिए।', 'options' => ['3 1/7', '3 2/7', '3 4/7', '3 5/7', 'अनुत्तरित प्रश्न']]
        ],
        13 => [
            'en' => ['question' => 'For a kite, which of the following are always true? I. Opposite sides are equal. II. Diagonals are perpendicular to each other. III. Opposite angles are supplementary. IV. Sum of the interior angles is 360°. Choose the most appropriate answer from the options given below:', 'options' => ['II and III only', 'I and II only', 'II and IV only', 'II, III and IV only', 'Question not attempted']],
            'hi' => ['question' => 'पतंग के लिए, निम्नलिखित में से कौन-कौन से सदैव सत्य हैं? I. सम्मुख भुजाएँ बराबर होती हैं। II. विकर्ण परस्पर लम्ब होते हैं। III. सम्मुख कोण संपूरक होते हैं। IV. अन्तःकोणों का योग 360° होता है। नीचे दिए गए विकल्पों में से सबसे उपयुक्त उत्तर चुनें:', 'options' => ['केवल II और III', 'केवल I और II', 'केवल II और IV', 'केवल II, III और IV', 'अनुत्तरित प्रश्न']]
        ],
        14 => [
            'en' => ['question' => 'Two circles with radii 25 cm and 30 cm intersect each other at P and Q. If length of the common chord PQ is 48 cm, then find the distance between their centres.', 'options' => ['22 cm', '24 cm', '25 cm', '27 cm', 'Question not attempted']],
            'hi' => ['question' => '25 सेमी और 30 सेमी त्रिज्या वाले दो वृत्त परस्पर P और Q पर काटते हैं। यदि उनकी उभयनिष्ठ जीवा PQ की लंबाई 48 सेमी है, तो उनके केंद्रों के बीच की दूरी ज्ञात कीजिए।', 'options' => ['22 सेमी', '24 सेमी', '25 सेमी', '27 सेमी', 'अनुत्तरित प्रश्न']]
        ],
        15 => [
            'en' => ['question' => 'In which of the following states is the "Pachmarhi Biosphere Reserve" located?', 'options' => ['Sikkim', 'Rajasthan', 'Andhra Pradesh', 'Madhya Pradesh', 'Question not attempted']],
            'hi' => ['question' => '“पचमढ़ी जैव-मंडल निचय” निम्नलिखित में से किस राज्य में स्थित है?', 'options' => ['सिक्किम', 'राजस्थान', 'आंध्र प्रदेश', 'मध्य प्रदेश', 'अनुत्तरित प्रश्न']]
        ],
        16 => [
            'en' => ['question' => 'Which of the following regions of Rajasthan is NOT a part of East-West corridor? (Choose the most appropriate option from below)', 'options' => ['Udaipur', 'Chittorgarh', 'Kota', 'Sri Ganganagar', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान का निम्नलिखित में से कौन सा क्षेत्र पूर्व-पश्चिम गलियारे (कॉरिडोर) का हिस्सा नहीं है? (निम्न में से सबसे उपयुक्त विकल्प चुनें)', 'options' => ['उदयपुर', 'चित्तौड़गढ़', 'कोटा', 'श्री गंगानगर', 'अनुत्तरित प्रश्न']]
        ],
        17 => [
            'en' => ['question' => 'In which of the following regions in Rajasthan, are Sub-Tropical mountain forests found?', 'options' => ['Jhalawar', 'Mount Abu', 'Jaisalmer', 'Barmer', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान में उप-उष्णकटिबंधीय पर्वतीय वन निम्नलिखित में से किस क्षेत्र में पाए जाते हैं?', 'options' => ['झालावाड़', 'माउंट आबू', 'जैसलमेर', 'बाड़मेर', 'अनुत्तरित प्रश्न']]
        ],
        18 => [
            'en' => ['question' => 'Which of the following soil is mainly found in the arid western plain of Rajasthan?', 'options' => ['Black soil', 'Desert soil', 'Alluvial soil', 'Marsh soil', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान के शुष्क पश्चिमी मैदानी भाग में मुख्य रूप से निम्न में से किस प्रकार की मिट्टी पाई जाती है?', 'options' => ['काली मृदा', 'रेगिस्तानी मृदा', 'जलोढ़ मृदा', 'दलदली मृदा', 'अनुत्तरित प्रश्न']]
        ],
        19 => [
            'en' => ['question' => 'Rajasthan\'s South-eastern plateau region is also known as the', 'options' => ['Semi-arid plateau', 'Hadoti plateau', 'Shekhawati region', 'Arid desert plain', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान का दक्षिण-पूर्वी पठारी क्षेत्र ______ के नाम से भी जाना जाता है।', 'options' => ['अर्ध-शुष्क पठार', 'हाड़ौती पठार', 'शेखावाटी क्षेत्र', 'शुष्क मरुस्थलीय मैदान', 'अनुत्तरित प्रश्न']]
        ],
        20 => [
            'en' => ['question' => 'According to census 2011 of Rajasthan which of the following regions has the highest literacy rate?', 'options' => ['Jaipur', 'Dungarpur', 'Jalore', 'Sirohi', 'Question not attempted']],
            'hi' => ['question' => '2011 की जनगणना के अनुसार राजस्थान के निम्नलिखित में से किस क्षेत्र में साक्षरता दर सर्वाधिक है?', 'options' => ['जयपुर', 'डूंगरपुर', 'जालौर', 'सिरोही', 'अनुत्तरित प्रश्न']]
        ],
        21 => [
            'en' => ['question' => 'The second phase of the "Mukhya Mantri Yuva Kaushal Yojana (MMYKY)" 2.0, in Rajasthan was launched in:', 'options' => ['2017', '2024', '2021', '2023', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान में “मुख्यमंत्री युवा कौशल योजना (MMYKY)” 2.0 के दूसरे चरण का शुभारंभ कब किया गया था?', 'options' => ['2017', '2024', '2021', '2023', 'अनुत्तरित प्रश्न']]
        ],
        22 => [
            'en' => ['question' => 'Which of the following renewable energy sources has been allocated a target of 25000 MW under the Rajasthan Integrated Clean Energy Policy-2024?', 'options' => ['Solar', 'Biomass', 'Hydro and Pump Storage Plant', 'Wind and Hybrid', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान एकीकृत स्वच्छ ऊर्जा नीति-2024 के तहत निम्नलिखित में से किस नवीकरणीय ऊर्जा स्रोत को 25,000 मेगावाट का लक्ष्य आवंटित किया गया है?', 'options' => ['सौर', 'बायोमास', 'जलविद्युत और पंप स्टोरेज प्लांट', 'पवन और हाइब्रिड', 'अनुत्तरित प्रश्न']]
        ],
        23 => [
            'en' => ['question' => 'Which of the following animals is not included for insurance coverage under the “Mukhyamantri Mangla Pashu Bima Yojana” in 2024-25?', 'options' => ['Cow', 'Camel', 'Buffalo', 'Pig', 'Question not attempted']],
            'hi' => ['question' => '“मुख्यमंत्री मंगला पशु बीमा योजना" (2024-25) के अंतर्गत निम्नलिखित में से किस पशु को बीमा कवरेज से बाहर रखा गया है?', 'options' => ['गाय', 'ऊंट', 'भैंस', 'सूअर', 'अनुत्तरित प्रश्न']]
        ],
        24 => [
            'en' => ['question' => 'Who among the following received the "Sahitya Akademi Yuva Puraskar-2024" from Rajasthan?', 'options' => ['Sonali Suthar', 'Devilal Mahiya', 'Aashish Purohit', 'Keerti Parihar', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित में से किसे राजस्थान से “साहित्य अकादमी युवा पुरस्कार-2024" मिला?', 'options' => ['सोनाली सुथार', 'देवीलाल महिया', 'आशीष पुरोहित', 'कीर्ति परिहार', 'अनुत्तरित प्रश्न']]
        ],
        25 => [
            'en' => ['question' => 'Which of the following is used to control fire caused due to electrical equipment? (Choose the most appropriate option from below)', 'options' => ['Water', 'Carbon dioxide', 'Carbon monoxide', 'Hydrogen', 'Question not attempted']],
            'hi' => ['question' => 'विद्युत उपकरणों के कारण लगी आग को नियंत्रित करने के लिए निम्नलिखित में से किसका उपयोग किया जाता है? (निम्न में से सबसे उपयुक्त विकल्प चुनें)', 'options' => ['पानी', 'कार्बन डाइऑक्साइड', 'कार्बन मोनोक्साइड', 'हाइड्रोजन', 'अनुत्तरित प्रश्न']]
        ],
        26 => [
            'en' => ['question' => 'Which of the following human diseases is not correctly matched to their causative microorganism?', 'options' => ['Tuberculosis - bacteria', 'Measles - virus', 'Cholera - bacteria', 'Malaria - bacteria', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित में से कौनसा मानव रोग उसके कारक सूक्ष्मजीव से सही ढंग से मेल नहीं खाता है?', 'options' => ['क्षय रोग (टी.बी.) - जीवाणु', 'खसरा - विषाणु', 'हैजा - जीवाणु', 'मलेरिया - जीवाणु', 'अनुत्तरित प्रश्न']]
        ],
        27 => [
            'en' => ['question' => 'Which of the following polymers is used to make oil seals, gaskets, and surface coating of non-stick utensils?', 'options' => ['Polythene', 'Teflon', 'Nylon', 'Bakelite', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित में से कौनसा बहुलक तेल सील, गास्केट तथा नॉन-स्टिक बर्तनों के बहिस्तल लेपन के लिए उपयोग किया जाता है?', 'options' => ['पॉलीथीन', 'टेफ्लॉन', 'नायलॉन', 'बैकेलाइट', 'अनुत्तरित प्रश्न']]
        ],
        28 => [
            'en' => ['question' => 'Chlorophyll is a coordination compound of:', 'options' => ['Iron', 'Cobalt', 'Magnesium', 'Manganese', 'Question not attempted']],
            'hi' => ['question' => 'क्लोरोफिल निम्न का एक समन्वय यौगिक है:', 'options' => ['लोहा', 'कोबाल्ट', 'मैग्नीशियम', 'मैंगनीज', 'अनुत्तरित प्रश्न']]
        ],
        29 => [
            'en' => ['question' => 'The Khejri tree of Rajasthan belongs to which of the following types of forests? Choose the most appropriate option from the following:', 'options' => ['Tropical Thorn Forests', 'Tropical dry deciduous Forests', 'Sub-Tropical Mountain Forests', 'Mangrove Forests', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान का खेजड़ी पेड़ निम्नलिखित में से किस प्रकार के वन से संबंधित है? निम्नलिखित में से सबसे उपयुक्त विकल्प चुनें:', 'options' => ['उष्णकटिबंधीय कांटेदार वन', 'उष्णकटिबंधीय शुष्क पर्णपाती वन', 'उप-उष्णकटिबंधीय पर्वतीय वन', 'मैंग्रोव वन', 'अनुत्तरित प्रश्न']]
        ],
        30 => [
            'en' => ['question' => 'According to Renewable Energy Statistics-2023-24, Rajasthan held which position in India\'s renewable energy installed capacity ranking (as on 31st March 2024)?', 'options' => ['1st', '2nd', '5th', '3rd', 'Question not attempted']],
            'hi' => ['question' => 'नवीकरणीय ऊर्जा सांख्यिकी-2023-24 के अनुसार, भारत की नवीकरणीय ऊर्जा स्थापित क्षमता में राजस्थान की क्या रैंकिंग थी (31 मार्च 2024 के अनुसार)?', 'options' => ['प्रथम', 'द्वितीय', 'पांचवी', 'तीसरी', 'अनुत्तरित प्रश्न']]
        ],
        31 => [
            'en' => ['question' => 'Which of the following is a major Rabi crop in the arid western plain agro-climatic zone in Rajasthan?', 'options' => ['Rice', 'Wheat', 'Pearl millet', 'Moth bean', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान के शुष्क पश्चिमी मैदान कृषि-जलवायु क्षेत्र में निम्नलिखित में से कौनसी एक प्रमुख रबी फसल है?', 'options' => ['चावल', 'गेहूँ', 'बाजरा', 'मोठ', 'अनुत्तरित प्रश्न']]
        ],
        32 => [
            'en' => ['question' => 'In which of the following agro-climatic zones, cotton is a major kharif crop in Rajasthan?', 'options' => ['Irrigated North-Western Plain', 'Internal Drainage Dry Zone', 'Transitional Plain of Luni Basin', 'Sub-humid Southern Plains', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान में निम्नलिखित में से किस कृषि-जलवायु क्षेत्र में कपास एक प्रमुख खरीफ फसल है?', 'options' => ['सिंचित उत्तर-पश्चिमी मैदान', 'आंतरिक जल निकासी शुष्क क्षेत्र', 'लूनी बेसिन का परिवर्ती मैदान', 'उप-आर्द्र दक्षिणी मैदान', 'अनुत्तरित प्रश्न']]
        ],
        33 => [
            'en' => ['question' => 'Which of the following regions of Rajasthan are being developed for artificial silk (Tussar)?', 'options' => ['Banswara, Kota and Udaipur', 'Jaisalmer, Jalore and Baran', 'Bikaner and Pali', 'Barmer and Dungarpur', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान के निम्नलिखित में से किन क्षेत्रों को कृत्रिम रेशम (तसर) के लिए विकसित किया जा रहा है?', 'options' => ['बांसवाड़ा, कोटा और उदयपुर', 'जैसलमेर, जालौर और बारां', 'बीकानेर और पाली', 'बाड़मेर और डूंगरपुर', 'अनुत्तरित प्रश्न']]
        ],
        34 => [
            'en' => ['question' => 'Which of the following large projects of Rajasthan is also known as the lifeline / Maruganga of the state?', 'options' => ['Sidhmukh Nahar Project', 'Narmada Canal Project', 'Jakham Project', 'Indira Gandhi Canal Project', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान की निम्नलिखित में से कौन सी बड़ी परियोजना राज्य की जीवनरेखा / मरुगंगा के रूप में जानी जाती है?', 'options' => ['सिद्धमुख नहर परियोजना', 'नर्मदा नहर परियोजना', 'जाखम परियोजना', 'इंदिरा गांधी नहर परियोजना', 'अनुत्तरित प्रश्न']]
        ],
        35 => [
            'en' => ['question' => 'Which of the following dams have been built under the Chambal Project in Rajasthan?', 'options' => ['Jawahar Sagar Dam', 'Mahi Bajaj Sagar Dam', 'Meja Dam', 'Morel Dam', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान में चंबल परियोजना के तहत निम्नलिखित में से कौनसा बाँध बनाया गया है?', 'options' => ['जवाहर सागर बाँध', 'माही बजाज सागर बाँध', 'मेजा बाँध', 'मोरेल बाँध', 'अनुत्तरित प्रश्न']]
        ],
        36 => [
            'en' => ['question' => 'Due to reduction in the price of tea leaves of a particular brand by 8%, Ajay is able to buy 125g more for ₹ 460. The reduced price of tea leaves per kg is:', 'options' => ['₹ 320', '₹ 290.50', '₹ 284.40', '₹ 294.40', 'Question not attempted']],
            'hi' => ['question' => 'किसी एक ब्रांड की चाय का मूल्य 8% घटने के कारण अजय ₹ 460 में 125 ग्राम अधिक चाय खरीद पाता है। चाय का प्रति किग्रा घटा हुआ मूल्य है:', 'options' => ['₹ 320', '₹ 290.50', '₹ 284.40', '₹ 294.40', 'अनुत्तरित प्रश्न']]
        ],
        37 => [
            'en' => ['question' => 'Two vessels A and B contain mixtures of ethanol and water, having these in the ratio 5:2 and 7:6, respectively. To obtain a new mixture having ethanol and water in the ratio 8:5, in what ratio should the mixtures from vessels A and B be mixed?', 'options' => ['7:4', '7:6', '7:9', '6:7', 'Question not attempted']],
            'hi' => ['question' => 'इथनॉल और पानी के मिश्रण वाले दो बर्तनों A और B में ये क्रमशः 5:2 तथा 7:6 के अनुपात में हैं। एक नया मिश्रण जिसमें इथनॉल और पानी का अनुपात 8:5 हो, प्राप्त करने के लिए बर्तनों A और B के मिश्रणों को किस अनुपात में मिलाया जाना चाहिए?', 'options' => ['7:4', '7:6', '7:9', '6:7', 'अनुत्तरित प्रश्न']]
        ],
        38 => [
            'en' => ['question' => 'The average of 15 consecutive natural numbers arranged in ascending order is A. The average of the first 11 of these numbers is:', 'options' => ['A−1', 'A−2', 'A−3', 'A−4', 'Question not attempted']],
            'hi' => ['question' => 'आरोही क्रम में लगी 15 क्रमागत प्राकृतिक संख्याओं का औसत A है। इनमें से पहली 11 संख्याओं का औसत है:', 'options' => ['A−1', 'A−2', 'A−3', 'A−4', 'अनुत्तरित प्रश्न']]
        ],
        39 => [
            'en' => ['question' => 'The average marks of a class of 40 students is 62. The average marks of the students who have passed is 74 and the average marks of the students who have failed is 26. The number of students who have failed is:', 'options' => ['20', '18', '16', '10', 'Question not attempted']],
            'hi' => ['question' => 'किसी कक्षा के 40 विद्यार्थियों के औसत अंक 62 हैं। इनमें से उत्तीर्ण हुए विद्यार्थियों के औसत अंक 74 हैं तथा अनुत्तीर्ण रहे विद्यार्थियों के औसत अंक 26 हैं। अनुत्तीर्ण विद्यार्थियों की संख्या है:', 'options' => ['20', '18', '16', '10', 'अनुत्तरित प्रश्न']]
        ],
        40 => [
            'en' => ['question' => 'A sum of ₹ 4,080 is divided between Ajay and Vijay in such a way that when invested on compound interest, the amount Ajay receives after 10 years is equal to the amount Vijay receives after 11 years, the interest being compounded annually at 4% per annum. The share of Ajay is:', 'options' => ['₹ 2,000', '₹ 2,080', '₹ 2,280', '₹ 2,200', 'Question not attempted']],
            'hi' => ['question' => '₹ 4,080 को अजय और विजय के बीच इस प्रकार बाँटा गया कि चक्रवृद्धि ब्याज पर निवेश करने पर 10 वर्ष पश्चात् अजय को मिलने वाली कुल धनराशि, 11 वर्ष पश्चात् विजय को मिलने वाली कुल धनराशि के बराबर हो, जब ब्याज 4% वार्षिक दर से प्रति वर्ष संयोजित होता है। अजय का भाग है:', 'options' => ['₹ 2,000', '₹ 2,080', '₹ 2,280', '₹ 2,200', 'अनुत्तरित प्रश्न']]
        ],
        41 => [
            'en' => ['question' => 'If the difference between compound interest compounded semi-annually and simple interest on a certain sum of money at 10% per annum for 1 ½ years is ₹ 244, then find the sum of money.', 'options' => ['₹ 36,000', '₹ 32,000', '₹ 38,500', '₹ 35,500', 'Question not attempted']],
            'hi' => ['question' => 'यदि किसी धनराशि पर 10% वार्षिक दर से 1 ½ वर्ष के लिए अर्धवार्षिक संयोजित हो रहे चक्रवृद्धि ब्याज और साधारण ब्याज में अंतर ₹ 244 है, तो वह धनराशि ज्ञात करें।', 'options' => ['₹ 36,000', '₹ 32,000', '₹ 38,500', '₹ 35,500', 'अनुत्तरित प्रश्न']]
        ],
        42 => [
            'en' => ['question' => 'The selling price of an article is 5/4 times its cost price. What is the profit percentage?', 'options' => ['25%', '24%', '50%', '30%', 'Question not attempted']],
            'hi' => ['question' => 'किसी वस्तु का विक्रय मूल्य उसके क्रय मूल्य का 5/4 गुना है। लाभ प्रतिशत क्या है?', 'options' => ['25%', '24%', '50%', '30%', 'अनुत्तरित प्रश्न']]
        ],
        43 => [
            'en' => ['question' => 'Chandrayaan I is: (Choose the most appropriate option from below)', 'options' => ['an earth observation satellite', 'a lunar probe', 'a navigation satellite', 'a geostationary satellite', 'Question not attempted']],
            'hi' => ['question' => 'चंद्रयान-I ____ है। (निम्न में से सबसे उपयुक्त विकल्प चुनें)', 'options' => ['पृथ्वी अवलोकन उपग्रह', 'एक चंद्र-अन्वेषी शलाका (परिक्षित्र )', 'एक नेविगेशन उपग्रह', 'एक भूस्थिर उपग्रह', 'अनुत्तरित प्रश्न']]
        ],
        44 => [
            'en' => ['question' => 'Transmission of sound is not possible in: (Choose the most appropriate option from below)', 'options' => ['water', 'air', 'iron rod', 'vacuum', 'Question not attempted']],
            'hi' => ['question' => 'ध्वनि का संचरण इनमें से किसमें संभव नहीं है ? (निम्न में से सबसे उपयुक्त विकल्प चुनें)', 'options' => ['पानी', 'वायु', 'लोहे की छड़', 'निर्वात (वैक्यूम)', 'अनुत्तरित प्रश्न']]
        ],
        45 => [
            'en' => ['question' => 'Which of the following gases is most abundant in the earth atmosphere?', 'options' => ['Hydrogen', 'Oxygen', 'Carbon dioxide', 'Nitrogen', 'Question not attempted']],
            'hi' => ['question' => 'पृथ्वी के वायुमंडल में निम्नलिखित में से कौन सी गैस सबसे अधिक मात्रा में पाई जाती है?', 'options' => ['हाइड्रोजन', 'ऑक्सीजन', 'कार्बन डाइऑक्साइड', 'नाइट्रोजन', 'अनुत्तरित प्रश्न']]
        ],
        46 => [
            'en' => ['question' => 'Which of the following is not a non-contact force?', 'options' => ['Magnetic force', 'Electrostatic force', 'Gravitational force', 'Muscular force', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित में से कौनसा गैर-संपर्क बल नहीं है?', 'options' => ['चुंबकीय बल', 'स्थिरवैद्युत बल', 'गुरुत्वाकर्षण बल', 'मांसपेशीय बल', 'अनुत्तरित प्रश्न']]
        ],
        47 => [
            'en' => ['question' => 'Jos plateau is located in which of the following continents?', 'options' => ['Europe', 'Asia', 'North America', 'Africa', 'Question not attempted']],
            'hi' => ['question' => 'जोस पठार निम्नलिखित में से किस महाद्वीप में स्थित है?', 'options' => ['यूरोप', 'एशिया', 'उत्तरी अमेरिका', 'अफ्रीका', 'अनुत्तरित प्रश्न']]
        ],
        48 => [
            'en' => ['question' => 'Colorado river basin is located in:-', 'options' => ['Japan', 'China', 'United States of America', 'Germany', 'Question not attempted']],
            'hi' => ['question' => 'कोलोराडो नदी बेसिन निम्नलिखित में से कहाँ स्थित है?', 'options' => ['जापान', 'चीन', 'संयुक्त राज्य अमेरिका', 'जर्मनी', 'अनुत्तरित प्रश्न']]
        ],
        49 => [
            'en' => ['question' => 'The Great Barrier Reef is located along the ________.', 'options' => ['Western coast of Australia', 'Western coast of Africa', 'North-Eastern coast of Australia', 'Eastern coast of South America', 'Question not attempted']],
            'hi' => ['question' => 'ग्रेट बैरियर रीफ ________ के साथ स्थित है/ से लगा हुआ है।', 'options' => ['ऑस्ट्रेलिया के पश्चिमी तट', 'अफ्रीका के पश्चिमी तट', 'ऑस्ट्रेलिया के उत्तर-पूर्वी तट', 'दक्षिण अमेरिका के पूर्वी तट', 'अनुत्तरित प्रश्न']]
        ],
        50 => [
            'en' => ['question' => 'Which of the following objectives of the Mitigating Poverty in Western Rajasthan is not correct? (Choose the most appropriate option from below)', 'options' => ['Drought mitigation and water securitization', 'Income enhancement and employment generation', 'Market led productivity improvements', 'Expansion of industrialization in the Thar Desert', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित में से कौन सा पश्चिमी राजस्थान में गरीबी उन्मूलन का सही उद्देश्य नहीं है? (निम्न में से सबसे उपयुक्त विकल्प चुनें)', 'options' => ['सूखा प्रबंधन और जल सुरक्षा', 'आय वृद्धि और रोजगार सृजन', 'बाज़ार-आधारित उत्पादकता सुधार', 'थार मरुस्थल में औद्योगीकरण का विस्तार', 'अनुत्तरित प्रश्न']]
        ],
        51 => [
            'en' => ['question' => 'According to the Crisis Management plan-2014 of Rajasthan which of the following regions does not belong to the "once in 5 years" drought recurrence period?', 'options' => ['Alwar', 'Jaipur', 'Sirohi', 'Pali', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान के संकट प्रबंधन योजना-2014 के अनुसार, निम्नलिखित में से कौन सा क्षेत्र “5 वर्ष में एक बार” सूखा पुनरावर्ती अवधि में शामिल नहीं है?', 'options' => ['अलवर', 'जयपुर', 'सिरोही', 'पाली', 'अनुत्तरित प्रश्न']]
        ],
        52 => [
            'en' => ['question' => 'Which of the following steps should not be taken for the control of desertification in Rajasthan? (Choose the most appropriate option from below)', 'options' => ['Ban on cutting of desert vegetation', 'Control overgrazing', 'Proper use of available ground water resources', 'Over exploitation of ground water', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान में मरुस्थलीकरण पर नियंत्रण के लिए निम्नलिखित में से कौनसा कदम नहीं उठाया जाना चाहिए? (निम्न में से सबसे उपयुक्त विकल्प चुनें)', 'options' => ['मरुस्थलीय वनस्पतियों की कटाई पर प्रतिबंध', 'अतिचारण पर नियंत्रण', 'उपलब्ध भूजल संसाधनों का समुचित उपयोग', 'भूमिगत जल का अत्यधिक उपयोग', 'अनुत्तरित प्रश्न']]
        ],
        53 => [
            'en' => ['question' => 'Which region of Rajasthan is known for its internationally acclaimed variety of green marble?', 'options' => ['Makrana', 'Rishabdeo - Kesariaji', 'Rampura - Agucha', 'Basantgarh - Deri', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान का कौन सा क्षेत्र अपनी अंतरराष्ट्रीय स्तर पर प्रशंसित हरे संगमरमर (ग्रीन मार्बल) की किस्म के लिए जाना जाता है?', 'options' => ['मकराना', 'ऋषभदेव - केसरीयाजी', 'रामपुरा - अगूचा', 'बसंतगढ़ - डेरी', 'अनुत्तरित प्रश्न']]
        ],
        54 => [
            'en' => ['question' => 'According to the Agricultural Statistics of Rajasthan 2022-23, which was the largest land use category in Rajasthan?', 'options' => ['Gross Cropped area', 'Forest', 'Gross irrigated area', 'Current Fallow', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान के कृषि सांख्यिकी 2022-23 के अनुसार राजस्थान में सबसे बड़ी भूमि उपयोग श्रेणी कौन सी थी?', 'options' => ['सकल फसल क्षेत्र', 'वन', 'सकल सिंचित क्षेत्र', 'वर्तमान परती', 'अनुत्तरित प्रश्न']]
        ],
        55 => [
            'en' => ['question' => 'Mukundra Hills National Park is located in which of the following regions of Rajasthan?', 'options' => ['Alwar', 'Pratapgarh', 'Kota', 'Bhilwara', 'Question not attempted']],
            'hi' => ['question' => 'मुकुंदरा हिल्स राष्ट्रीय उद्यान राजस्थान के निम्नलिखित में से किस क्षेत्र में स्थित है?', 'options' => ['अलवर', 'प्रतापगढ़', 'कोटा', 'भीलवाड़ा', 'अनुत्तरित प्रश्न']]
        ],
        56 => [
            'en' => ['question' => 'Which of the following cattle breeds is native to Rajasthan?', 'options' => ['Rathi', 'Ongole', 'Deoni', 'Krishna valley', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित में से कौन सी पशु नस्ल राजस्थान की देशी नस्ल है?', 'options' => ['राठी', 'ओंगोल', 'दिओनी', 'कृष्णा वैली', 'अनुत्तरित प्रश्न']]
        ],
        57 => [
            'en' => ['question' => 'The proper sandhi-vichchhed of \'आद्यन्त\' is-', 'options' => ['आदि + अन्त', 'आद्य + अन्त', 'आ + द्यन्त', 'आदी + अन्त', 'Question not attempted']],
            'hi' => ['question' => '\'आद्यन्त\' का उचित संधि-विच्छेद होगा-', 'options' => ['आदि + अन्त', 'आद्य + अन्त', 'आ + द्यन्त', 'आदी + अन्त', 'अनुत्तरित प्रश्न']]
        ],
        58 => [
            'en' => ['question' => 'The proper sandhi of \'धर्म + उपदेश\' will be-', 'options' => ['धर्मापदेश', 'धमोपदेश', 'धर्मोपदेश', 'धर्मपदेश', 'Question not attempted']],
            'hi' => ['question' => '\'धर्म + उपदेश\' की उचित संधि होगी-', 'options' => ['धर्मापदेश', 'धमोपदेश', 'धर्मोपदेश', 'धर्मपदेश', 'अनुत्तरित प्रश्न']]
        ],
        59 => [
            'en' => ['question' => 'The appropriate compound word for the phrase \'संसार रूपी सागर\' will be-', 'options' => ['सागरों का संसार', 'संसारसागर', 'सागररत्न', 'सागरिका', 'Question not attempted']],
            'hi' => ['question' => '‘संसार रूपी सागर\' इस विग्रह के लिए उपयुक्त समस्तपद होगा-', 'options' => ['सागरों का संसार', 'संसारसागर', 'सागररत्न', 'सागरिका', 'अनुत्तरित प्रश्न']]
        ],
        60 => [
            'en' => ['question' => 'The proper analysis of the compound word \'लौहपुरुष\' is- (Choose the most appropriate option)', 'options' => ['लोहे का पुरुष है जो', 'पुरुष का बना लोहा', 'पुरुष के समान लोहा', 'लोहे के समान पुरुष', 'Question not attempted']],
            'hi' => ['question' => '\'लौहपुरुष\' इस समस्तपद का उचित विग्रह है- (निम्न में से सबसे उपयुक्त विकल्प चुनें)', 'options' => ['लोहे का पुरुष है जो', 'पुरुष का बना लोहा', 'पुरुष के समान लोहा', 'लोहे के समान पुरुष', 'अनुत्तरित प्रश्न']]
        ],
        61 => [
            'en' => ['question' => 'Which of these words will be formed by adding the prefix \'अभि\' to the word \'आगत\'?', 'options' => ['अभिगत', 'अभ्यागत', 'आभ्यागत', 'अभगत', 'Question not attempted']],
            'hi' => ['question' => '\'आगत\' शब्द में \'अभि\' उपसर्ग जोड़ने से इनमें से किस शब्द का निर्माण होगा?', 'options' => ['अभिगत', 'अभ्यागत', 'आभ्यागत', 'अभगत', 'अनुत्तरित प्रश्न']]
        ],
        62 => [
            'en' => ['question' => 'Which prefix is in the word \'उद्धार\'?', 'options' => ['उत्', 'अद्', 'उध्', 'उध', 'Question not attempted']],
            'hi' => ['question' => '\'उद्धार\' शब्द में कौन-सा उपसर्ग है?', 'options' => ['उत्', 'अद्', 'उध्', 'उध', 'अनुत्तरित प्रश्न']]
        ],
        63 => [
            'en' => ['question' => 'The suffix in the word \'बनावट\' is-', 'options' => ['वट', 'बन', 'नावट', 'आवट', 'Question not attempted']],
            'hi' => ['question' => '\'बनावट\' शब्द में प्रत्यय है-', 'options' => ['वट', 'बन', 'नावट', 'आवट', 'अनुत्तरित प्रश्न']]
        ],
        64 => [
            'en' => ['question' => 'Match the districts of Rajasthan given in List I with the ODOP products given in List II. Choose the most appropriate answer from the options given below:', 'options' => ['a-I, b-II, c-III, d-IV', 'a-II, b-IV, c-I, d-III', 'a-IV, b-III, c-II, d-I', 'a-III, b-IV, c-I, d-II', 'Question not attempted']],
            'hi' => ['question' => 'सूची I में दिए गए राजस्थान के जिलों का मिलान सूची II में दिए गए ODOP उत्पादों के साथ कीजिए। नीचे दिए गए विकल्पों में से सबसे उपयुक्त उत्तर चुनें:', 'options' => ['a-I, b-II, c-III, d-IV', 'a-II, b-IV, c-I, d-III', 'a-IV, b-III, c-II, d-I', 'a-III, b-IV, c-I, d-II', 'अनुत्तरित प्रश्न']]
        ],
        65 => [
            'en' => ['question' => 'According to the Rising Rajasthan -2024 report which of the following regions is famous for wooden furniture and handicrafts?', 'options' => ['Jaipur', 'Jodhpur', 'Bikaner', 'Udaipur', 'Question not attempted']],
            'hi' => ['question' => 'राइजिंग राजस्थान - 2024 रिपोर्ट के अनुसार निम्नलिखित में से कौन सा क्षेत्र लकड़ी के फर्नीचर और हस्तशिल्प के लिए प्रसिद्ध है?', 'options' => ['जयपुर', 'जोधपुर', 'बीकानेर', 'उदयपुर', 'अनुत्तरित प्रश्न']]
        ],
        66 => [
            'en' => ['question' => 'According to Rajasthan Economic Review (2024-25), which tribal community receives 100 additional days of employment under Chief Minister Rural Employment Guarantee Scheme (CMREGS) in Baran region?', 'options' => ['Bhills', 'Garasia', 'Sahariya', 'Mina', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान आर्थिक समीक्षा-(2024-25) के अनुसार, मुख्यमंत्री ग्रामीण रोजगार गारंटी योजना (CMREGS) के तहत बारां क्षेत्र में किस आदिवासी समुदाय को 100 दिनों का अतिरिक्त रोजगार प्राप्त होता है?', 'options' => ['भील', 'गरासिया', 'सहरिया', 'मीणा', 'अनुत्तरित प्रश्न']]
        ],
        67 => [
            'en' => ['question' => 'According to Rajasthan Economic Review (2024-25), under Chief Minister Rural Employment Guarantee Scheme (CMREGS) how many additional days of employment are provided after completing 100 days under MGNREGS?', 'options' => ['50 days', '25 days', '75 days', '100 days', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान आर्थिक समीक्षा (2024-25) के अनुसार, मुख्यमंत्री ग्रामीण रोजगार गारंटी योजना (CMREGS) के तहत महात्मा गांधी राष्ट्रीय ग्रामीण रोजगार गारंटी योजना (MGNREGS) में 100 दिन पूरे होने के बाद कितने अतिरिक्त दिनों का रोजगार प्रदान किया जाता है?', 'options' => ['50 दिन', '25 दिन', '75 दिन', '100 दिन', 'अनुत्तरित प्रश्न']]
        ],
        68 => [
            'en' => ['question' => 'The Rajasthan Institute for Transformation and Innovation (RITI) has been established in which year?', 'options' => ['2018', '2020', '2022', '2024', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान परिवर्तन एवं नवाचार संस्थान (RITI) की स्थापना किस वर्ष में हुई थी?', 'options' => ['2018', '2020', '2022', '2024', 'अनुत्तरित प्रश्न']]
        ],
        69 => [
            'en' => ['question' => 'Which of these is true under RIPS 2024 regarding Data Centers and The Sunrise Booster in Rajasthan? (Choose the most appropriate option from below)', 'options' => ['Any Data Center project, irrespective of size or number of units, is eligible for a 25% Sunrise Booster over the chosen Asset Creation Incentive.', 'Only the first 3 units of Data Centers of minimum capacity 10 MW are eligible for a 25% Sunrise Booster.', 'Data Centers do not qualify as a Sunrise Sector under RIPS 2024.', 'Only Data Center units with capacity exceeding 50 MW get the Sunrise Booster under RIPS 2024.', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान में डाटा सेन्टर्स और सनराइज़ बूस्टर के संदर्भ में RIPS 2024 के अन्तर्गत निम्न में से कौन-सा सही है? (निम्न में से सबसे उपयुक्त विकल्प चुनें)', 'options' => ['कोई भी डाटा सेन्टर प्रोजेक्ट, आकार एवं इकाईयों की संख्या को ध्यान में लिए बगैर, चयन की गयी सम्पत्ति सर्जन प्रोत्साहन पर 25% सनराइज़ बूस्टर के लिए पात्र है।', '10 MW न्यूनतम क्षमता के डाटा सेन्टरों की केवल प्रथम 3 इकाईयाँ 25% सनराइज़ बूस्टर के लिए पात्र हैं।', 'RIPS 2024 के अन्तर्गत सनराइज़ सेक्टर के रूप में डाटा सेन्टर्स की अर्हता नहीं होती।', 'RIPS 2024 के अन्तर्गत केवल 50 MW से अधिक क्षमता वाली डाटा सेन्टर इकाईयों को सनराइज़ बूस्टर प्राप्त होता है।', 'अनुत्तरित प्रश्न']]
        ],
        70 => [
            'en' => ['question' => 'Under the One District One Product (ODOP) initiative of the PMFME Scheme, which of the following products has been identified as the key product for the Sawai Madhopur district of Rajasthan?', 'options' => ['Garlic', 'Guava', 'Fennel based product', 'Fenugreek', 'Question not attempted']],
            'hi' => ['question' => 'प्रधानमंत्री सूक्ष्म खाद्य प्रसंस्करण उद्यमों की औपचारिकीकरण योजना (PMFME) के तहत एक ज़िला, एक उत्पाद (ODOP) पहल के अंतर्गत, राजस्थान के सवाई माधोपुर ज़िले के लिए मुख्य उत्पाद के रूप में निम्न में से कौन-सा उत्पाद चुना गया है?', 'options' => ['लहसुन', 'अमरूद', 'सौंफ आधारित उत्पाद', 'मेथी', 'अनुत्तरित प्रश्न']]
        ],
        71 => [
            'en' => ['question' => 'The one word for the phrase \'लौट कर आया हुआ\' will be-', 'options' => ['परोक्ष', 'प्रत्यागत', 'परार्थी', 'भावी', 'Question not attempted']],
            'hi' => ['question' => '\'लौट कर आया हुआ\' इस वाक्यांश के लिए एक शब्द होगा-', 'options' => ['परोक्ष', 'प्रत्यागत', 'परार्थी', 'भावी', 'अनुत्तरित प्रश्न']]
        ],
        72 => [
            'en' => ['question' => 'The meaningful word for \'जिसे किसी विषय की जानकारी न हो\' will be-', 'options' => ['अनभिज्ञ', 'निरक्षर', 'अगणनीय', 'अपारदर्शक', 'Question not attempted']],
            'hi' => ['question' => '\'जिसे किसी विषय की जानकारी न हो\' के लिए एक सार्थक शब्द होगा-', 'options' => ['अनभिज्ञ', 'निरक्षर', 'अगणनीय', 'अपारदर्शक', 'अनुत्तरित प्रश्न']]
        ],
        73 => [
            'en' => ['question' => 'The correct word among the following words is-', 'options' => ['व्युपति', 'व्युतपत्ति', 'व्युत्पत्ति', 'व्युतपति', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित शब्दों में से शुद्ध शब्द है-', 'options' => ['व्युपति', 'व्युतपत्ति', 'व्युत्पत्ति', 'व्युतपति', 'अनुत्तरित प्रश्न']]
        ],
        74 => [
            'en' => ['question' => 'Select the correct word from the following words-', 'options' => ['उज्ज्वल', 'उजजवल', 'उज्वल', 'उजवल', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित शब्दों में से शुद्ध शब्द का चयन कीजिए-', 'options' => ['उज्ज्वल', 'उजजवल', 'उज्वल', 'उजवल', 'अनुत्तरित प्रश्न']]
        ],
        75 => [
            'en' => ['question' => 'Select the correct sentence from the following sentences-', 'options' => ['इस विद्यालय में दो सौ छात्र हैं।', 'सौ छात्र इस विद्यालय में दो हैं।', 'छात्र इस विद्यालय में सों हैं।', 'सो छात्र विद्यालय में हैं।', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित वाक्यों में से शुद्ध वाक्य का चयन करें-', 'options' => ['इस विद्यालय में दो सौ छात्र हैं।', 'सौ छात्र इस विद्यालय में दो हैं।', 'छात्र इस विद्यालय में सों हैं।', 'सो छात्र विद्यालय में हैं।', 'अनुत्तरित प्रश्न']]
        ],
        76 => [
            'en' => ['question' => 'Select the correct sentence from the following sentences-', 'options' => ['साहित्ये जीवन अपूर्ण में अधूरा है।', 'साहित्य कठिन जीवन का संबंध है।', 'साहित्य है जीवन भी असंभव है।', 'साहित्य और जीवन का घनिष्ठ संबंध है।', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित वाक्यों में से शुद्ध वाक्य का चयन करें-', 'options' => ['साहित्ये जीवन अपूर्ण में अधूरा है।', 'साहित्य कठिन जीवन का संबंध है।', 'साहित्य है जीवन भी असंभव है।', 'साहित्य और जीवन का घनिष्ठ संबंध है।', 'अनुत्तरित प्रश्न']]
        ],
        77 => [
            'en' => ['question' => 'The meaning of the idiom ‘अपनी खिचड़ी अलग पकाना’ will be- (Choose the most appropriate option)', 'options' => ['साथ मिलकर खिचड़ी बनाना', 'साथ मिलकर न रहना', 'अकेले खिचड़ी बनाना', 'समूह का नेता बनना', 'Question not attempted']],
            'hi' => ['question' => '‘अपनी खिचड़ी अलग पकाना\' मुहावरे का अर्थ होगा- (निम्न में से सबसे उपयुक्त विकल्प चुनें)', 'options' => ['साथ मिलकर खिचड़ी बनाना', 'साथ मिलकर न रहना', 'अकेले खिचड़ी बनाना', 'समूह का नेता बनना', 'अनुत्तरित प्रश्न']]
        ],
        78 => [
            'en' => ['question' => 'The Mahi Bajaj Sagar Project is a joint-venture between which of the following states?', 'options' => ['Rajasthan and Punjab', 'Rajasthan and Haryana', 'Rajasthan and Uttar Pradesh', 'Rajasthan and Gujarat', 'Question not attempted']],
            'hi' => ['question' => 'माही बजाज सागर परियोजना निम्नलिखित में से किन राज्यों के बीच एक संयुक्त परियोजना है?', 'options' => ['राजस्थान और पंजाब', 'राजस्थान और हरियाणा', 'राजस्थान और उत्तर प्रदेश', 'राजस्थान और गुजरात', 'अनुत्तरित प्रश्न']]
        ],
        79 => [
            'en' => ['question' => 'Drought Prone Area Programme was initiated during which of the following five year plans?', 'options' => ['Second Five Year Plan', 'Fourth Five Year Plan', 'Eighth Five Year Plan', 'Ninth Five Year Plan', 'Question not attempted']],
            'hi' => ['question' => 'सूखा प्रवण क्षेत्र कार्यक्रम निम्नलिखित में से किस पंचवर्षीय योजना के दौरान शुरू किया गया था?', 'options' => ['दूसरी पंचवर्षीय योजना', 'चौथी पंचवर्षीय योजना', 'आठवीं पंचवर्षीय योजना', 'नौवीं पंचवर्षीय योजना', 'अनुत्तरित प्रश्न']]
        ],
        80 => [
            'en' => ['question' => 'The Mewat Area Development Programme is being implemented in which region of Rajasthan?', 'options' => ['Jaipur and Sikar', 'Alwar and Bharatpur', 'Kota and Bundi', 'Udaipur and Rajsamand', 'Question not attempted']],
            'hi' => ['question' => 'मेवात क्षेत्र विकास कार्यक्रम राजस्थान के किस क्षेत्र में लागू किया जा रहा है?', 'options' => ['जयपुर और सीकर', 'अलवर और भरतपुर', 'कोटा और बूंदी', 'उदयपुर और राजसमंद', 'अनुत्तरित प्रश्न']]
        ],
        81 => [
            'en' => ['question' => 'Which of the following benefits is not associated with the Indira Gandhi Canal Project? (Choose the most appropriate option from below)', 'options' => ['Growth of new towns and establishment of new business markets', 'Increased desertification', 'Development of pastures and forest area', 'Development of fisheries and animal husbandry', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित में से कौनसा लाभ इंदिरा गांधी नहर परियोजना से जुड़ा नहीं है? (निम्न में से सबसे उपयुक्त विकल्प चुनें)', 'options' => ['नए शहरों का विकास और नए व्यापारिक बाजारों की स्थापना', 'रेगिस्तानीकरण में वृद्धि', 'चारागाह और वन क्षेत्र का विकास', 'मत्स्य पालन और पशुपालन का विकास', 'अनुत्तरित प्रश्न']]
        ],
        82 => [
            'en' => ['question' => 'Which of the following is the main tributary canal constructed in Jaisalmer under the Indira Gandhi Canal Project?', 'options' => ['Sagarmal Gopa branch', 'Rawatsar branch', 'Suratgarh branch', 'Pugal branch', 'Question not attempted']],
            'hi' => ['question' => 'इंदिरा गांधी नहर परियोजना के तहत जैसलमेर में निर्मित निम्नलिखित में से कौन सी मुख्य सहायक नहर है?', 'options' => ['सागरमल गोपा शाखा', 'रावतसर शाखा', 'सूरतगढ़ शाखा', 'पुगल शाखा', 'अनुत्तरित प्रश्न']]
        ],
        83 => [
            'en' => ['question' => 'Name of the first cotton textile mill in Rajasthan is:', 'options' => ['The Bharat Mills Limited', 'The Krishna Mills Limited', 'Shri Mahalaxmi Mills Limited', 'The Maharaja Umaid Mill', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित में से राजस्थान की पहली सूती वस्त्र मिल कौन सी है?', 'options' => ['भारत मिल्स लिमिटेड', 'कृष्णा मिल्स लिमिटेड', 'श्री महालक्ष्मी मिल्स लिमिटेड', 'महाराजा उम्मेद मिल', 'अनुत्तरित प्रश्न']]
        ],
        84 => [
            'en' => ['question' => 'Which of the following is the main problem hindering the rapid development of the cement industry in Rajasthan? (Choose the most appropriate option from below)', 'options' => ['Updated production techniques', 'Irregular supply of electricity', 'Sufficient demand of cement', 'Lack of coal', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान में सीमेंट उद्योग के तीव्र विकास में निम्नलिखित में से कौन-सी एक मुख्य बाधा है? (निम्न में से सबसे उपयुक्त विकल्प चुनें)', 'options' => ['अद्यतन उत्पादन तकनीक', 'विद्युत की अनियमित आपूर्ति', 'सीमेंट की पर्याप्त मांग', 'कोयले की कमी', 'अनुत्तरित प्रश्न']]
        ],
        85 => [
            'en' => ['question' => 'Who first used the term \'Rajasthani\' in 1912 in the Linguistic Survey of India for the languages of Rajasthan?', 'options' => ['George Richard', 'George Macalley', 'James Tod', 'George Abraham Grierson', 'Question not attempted']],
            'hi' => ['question' => '1912 में भारतीय भाषाई सर्वेक्षण (Linguistic Survey of India) में राजस्थान की भाषाओं के लिए ‘राजस्थानी\' शब्द का प्रयोग सर्वप्रथम किसने किया था?', 'options' => ['जॉर्ज रिचर्ड', 'जॉर्ज मैकाले', 'जेम्स टॉड', 'जॉर्ज अब्राहम ग्रियर्सन', 'अनुत्तरित प्रश्न']]
        ],
        86 => [
            'en' => ['question' => 'Who is the author of the Rajasthani language book "Gir Uncha Uncha Gadhan"?', 'options' => ['Rani Lakshmi Kumari Chundawat', 'Shiv Chandra Bharatiya', 'Yadvendra Sharma', 'Nathmal Joshi', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थानी भाषा की पुस्तक \'गिर ऊंचा ऊंचा गढ़ां\' के लेखक कौन हैं?', 'options' => ['रानी लक्ष्मी कुमारी चूंडावत', 'शिव चंद्र भारतीय', 'यवेंद्र शर्मा', 'नथमल जोशी', 'अनुत्तरित प्रश्न']]
        ],
        87 => [
            'en' => ['question' => 'Who is the author of "Achaldas Khinchi ri Vachnika"?', 'options' => ['Shivdas Gaadan', 'Kaviraja Bankidas', 'Prithviraj Rathore', 'Madhodas', 'Question not attempted']],
            'hi' => ['question' => '"अचलदास खींची री वाचनिका" के लेखक कौन हैं?', 'options' => ['शिवदास गाडण', 'कविराजा बांकीदास', 'पृथ्वीराज राठौड़', 'माधोदास', 'अनुत्तरित प्रश्न']]
        ],
        88 => [
            'en' => ['question' => 'Match the Rajasthani dialects given in List I with the districts of Rajasthan given in List II. Choose the most appropriate answer from the options given below:', 'options' => ['a-II, b-IV, c-I, d-III', 'a-IV, b-II, c-I, d-III', 'a-III, b-II, c-IV, d-I', 'a-II, b-III, c-IV, d-I', 'Question not attempted']],
            'hi' => ['question' => 'सूची I में दी गयी राजस्थानी बोलियों का मिलान सूची II में दिए गए राजस्थान के जिलों के साथ कीजिए। नीचे दिए गए विकल्पों में से सबसे उपयुक्त उत्तर चुनें:', 'options' => ['a-II, b-IV, c-I, d-III', 'a-IV, b-II, c-I, d-III', 'a-III, b-II, c-IV, d-I', 'a-II, b-III, c-IV, d-I', 'अनुत्तरित प्रश्न']]
        ],
        89 => [
            'en' => ['question' => 'Which of the following folk dance does not belong to Rajasthan? (Choose the most appropriate option from below)', 'options' => ['Khoria', 'Gawri', 'Kalbelia', 'Chari', 'Question not attempted']],
            'hi' => ['question' => 'निम्न में से कौन-सा लोक नृत्य राजस्थान से संबंधित नहीं है? (निम्न में से सबसे उपयुक्त विकल्प चुनें)', 'options' => ['खोरिया', 'गवरी', 'कालबेलिया', 'चरी', 'अनुत्तरित प्रश्न']]
        ],
        90 => [
            'en' => ['question' => 'Match the following Rajasthani personalities given in List I with their Art/Cultural contribution given in List II. Choose the most appropriate answer from the options given below:', 'options' => ['a-II, b-IV, c-III, d-I', 'a-II, b-III, c-IV, d-I', 'a-III, b-II, c-I, d-IV', 'a-I, b-II, c-III, d-IV', 'Question not attempted']],
            'hi' => ['question' => 'सूची I में दी गयी राजस्थानी विभूतियों का मिलान सूची II में दिए गए उनके कला/सांस्कृतिक प्रदेय के साथ कीजिए। नीचे दिए गए विकल्पों में से सबसे उपयुक्त उत्तर चुनें:', 'options' => ['a-II, b-IV, c-III, d-I', 'a-II, b-III, c-IV, d-I', 'a-III, b-II, c-I, d-IV', 'a-I, b-II, c-III, d-IV', 'अनुत्तरित प्रश्न']]
        ],
        91 => [
            'en' => ['question' => 'Match the Folk dances given in List I with the Performers / Occasions on which they are performed given in List II : Choose the most appropriate answer from the options given below:', 'options' => ['a-I, b-II, c-III, d-IV', 'a-II, b-I, c-IV, d-III', 'a-III, b-IV, c-I, d-II', 'a-IV, b-III, c-II, d-I', 'Question not attempted']],
            'hi' => ['question' => 'सूची I में दिए गए लोक नृत्यों का मिलान सूची II में दिए गए प्रदर्शक / अवसर पर प्रदर्शित किए जाने के साथ कीजिए। नीचे दिए गए विकल्पों में से सबसे उपयुक्त उत्तर चुनें:', 'options' => ['a-I, b-II, c-III, d-IV', 'a-II, b-I, c-IV, d-III', 'a-III, b-IV, c-I, d-II', 'a-IV, b-III, c-II, d-I', 'अनुत्तरित प्रश्न']]
        ],
        92 => [
            'en' => ['question' => 'Nanu Ram of Chirawa is the most prominent artist of:', 'options' => ['Jaipuri Khayal', 'Shekhawati Khayal', 'Kuchamani Khayal', 'Hela Khayal', 'Question not attempted']],
            'hi' => ['question' => 'चिड़ावा के नानू राम किस के सबसे प्रमुख कलाकार हैं?', 'options' => ['जयपुरी ख्याल', 'शेखावाटी ख्याल', 'कुचामनी ख्याल', 'हेला ख्याल', 'अनुत्तरित प्रश्न']]
        ],
        93 => [
            'en' => ['question' => 'Match the Rajasthani ornaments given in List I with Body parts given in List II. Choose the most appropriate answer from the options given below:', 'options' => ['a-IV, b-III, c-II, d-I', 'a-I, b-II, c-IV, d-III', 'a-II, b-III, c-I, d-IV', 'a-III, b-I, c-II, d-IV', 'Question not attempted']],
            'hi' => ['question' => 'सूची I में दिए गए राजस्थानी आभूषणों का मिलान सूची II में दिए गए शरीर अंगों के साथ कीजिए। नीचे दिए गए विकल्पों में से सबसे उपयुक्त उत्तर चुनें:', 'options' => ['a-IV, b-III, c-II, d-I', 'a-I, b-II, c-IV, d-III', 'a-II, b-III, c-I, d-IV', 'a-III, b-I, c-II, d-IV', 'अनुत्तरित प्रश्न']]
        ],
        94 => [
            'en' => ['question' => 'Which lake is located near the Shri Manshapurna Karni Mata Temple in Rajasthan?', 'options' => ['Pushkar Lake', 'Suraj Tal', 'Doodh Talai Lake', 'Varun Sagar Lake', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान में श्री मनसापूर्ण करणी माता मंदिर के पास कौन सी झील स्थित है?', 'options' => ['पुष्कर झील', 'सुरज ताल', 'दूध तलाई झील', 'वरुण सागर झील', 'अनुत्तरित प्रश्न']]
        ],
        95 => [
            'en' => ['question' => 'Which of the following fair is the second biggest cattle fair in India?', 'options' => ['Nagaur Fair', 'Bikaner Camel Fair', 'Pushkar Fair', 'Sonepur Mela', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित में से कौन-सा मेला भारत का दूसरा सबसे बड़ा पशु मेला है?', 'options' => ['नागौर मेला', 'बीकानेर ऊँट मेला', 'पुष्कर मेला', 'सोनपुर मेला', 'अनुत्तरित प्रश्न']]
        ],
        96 => [
            'en' => ['question' => 'Match the Art form given in Column A with the Region in Column B. Choose the most appropriate answer from the options given below:', 'options' => ['a-III, b-I, c-IV, d-II', 'a-II, b-III, c-I, d-IV', 'a-III, b-IV, c-I, d-II', 'a-I, b-II, c-III, d-IV', 'Question not attempted']],
            'hi' => ['question' => 'कॉलम A में दिए गए कला स्वरूप का मिलान कॉलम B में दिए गए क्षेत्र से कीजिए। नीचे दिए गए विकल्पों में से सबसे उपयुक्त उत्तर चुनें:', 'options' => ['a-III, b-I, c-IV, d-II', 'a-II, b-III, c-I, d-IV', 'a-III, b-IV, c-I, d-II', 'a-I, b-II, c-III, d-IV', 'अनुत्तरित प्रश्न']]
        ],
        97 => [
            'en' => ['question' => 'The fastest type of computers, often employed for specialized operations and large mathematical calculations are:', 'options' => ['PDAs', 'Mainframe Computers', 'Ultra Pro Computers', 'Supercomputers', 'Question not attempted']],
            'hi' => ['question' => 'सबसे तेज़ प्रकार के कंप्यूटर, जो अक्सर विशेष संचालन और बड़े गणितीय गणनाओं के लिए उपयोग किए जाते हैं, कौन से होते हैं?', 'options' => ['पीडीए', 'मेनफ्रेम कंप्यूटर', 'अल्ट्रा प्रो कंप्यूटर', 'सुपरकंप्यूटर', 'अनुत्तरित प्रश्न']]
        ],
        98 => [
            'en' => ['question' => 'Which of the following is not a type of operating system for computers?', 'options' => ['Unix', 'Opera', 'Ubuntu', 'MacOS', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित में से कौन सा कंप्यूटर के लिए ऑपरेटिंग सिस्टम का प्रकार नहीं है?', 'options' => ['यूनिक्स', 'ओपेरा', 'उबंटू', 'मैकओएस', 'अनुत्तरित प्रश्न']]
        ],
        99 => [
            'en' => ['question' => 'Which of the following is not a type of primary memory in computers?', 'options' => ['DRAM', 'HDD', 'PROM', 'SRAM', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित में से कौन सा कंप्यूटर की प्राथमिक मेमोरी का प्रकार नहीं है?', 'options' => ['डीआरएएम', 'एचडीडी', 'पीआरओएम', 'एसआरएएम', 'अनुत्तरित प्रश्न']]
        ],
        100 => [
            'en' => ['question' => 'A shopkeeper bought two items for a total of ₹60,000. He sold one item with 25% profit and the other at 15% loss, thereby gaining 4% on the whole. What is the cost price of the item sold with profit?', 'options' => ['₹ 30,000', '₹ 29,800', '₹ 29,200', '₹ 28,500', 'Question not attempted']],
            'hi' => ['question' => 'एक दुकानदार ने कुल ₹ 60,000 में दो वस्तुएँ खरीदी। उसने एक वस्तु को 25% लाभ पर और दूसरी को 15% हानि पर बेचा। इस प्रकार उसे कुल मिलाकर 4% लाभ हुआ। लाभ पर बेची गई वस्तु का क्रय मूल्य क्या है?', 'options' => ['₹ 30,000', '₹ 29,800', '₹ 29,200', '₹ 28,500', 'अनुत्तरित प्रश्न']]
        ],
        101 => [
            'en' => ['question' => 'Radhika bought an article with 20% discount on the marked price. She made a profit of ₹ 4,800 by selling it for ₹ 32,480. The marked price of the article is:', 'options' => ['₹ 37,280', '₹ 29,824', '₹ 34,600', '₹ 36,525', 'Question not attempted']],
            'hi' => ['question' => 'राधिका ने एक वस्तु उसके अंकित मूल्य पर 20% छूट के साथ खरीदी। उसने इसे ₹ 32,480 में बेचकर ₹ 4,800 का लाभ प्राप्त किया। वस्तु का अंकित मूल्य है:', 'options' => ['₹ 37,280', '₹ 29,824', '₹ 34,600', '₹ 36,525', 'अनुत्तरित प्रश्न']]
        ],
        102 => [
            'en' => ['question' => 'Find the single discount equivalent to successive discounts 25%, 20% and 10%.', 'options' => ['55%', '50%', '46%', '42%', 'Question not attempted']],
            'hi' => ['question' => 'क्रमिक बट्टों 25%, 20% और 10% के समतुल्य एकल बट्टा ज्ञात करें।', 'options' => ['55%', '50%', '46%', '42%', 'अनुत्तरित प्रश्न']]
        ],
        103 => [
            'en' => ['question' => 'The sides of a rectangle are in the ratio 5:3 and perimeter of the rectangle is 80 cm. If the longer side of the rectangle is increased by 20% and the other side is increased by 40%, then what is the perimeter of the new rectangle?', 'options' => ['100 cm', '102 cm', '106 cm', '104 cm', 'Question not attempted']],
            'hi' => ['question' => 'एक आयत की भुजाओं में 5:3 का अनुपात है तथा आयत का परिमाप 80 सेमी है। यदि आयत की लंबी भुजा 20% बढ़ा दी जाए और दूसरी भुजा 40% बढ़ा दी जाए, तो नए आयत का परिमाप क्या है?', 'options' => ['100 सेमी', '102 सेमी', '106 सेमी', '104 सेमी', 'अनुत्तरित प्रश्न']]
        ],
        104 => [
            'en' => ['question' => 'Two trains 1.1 km and 0.9 km long are moving in opposite directions at speeds of 60 km/h and 90 km/h respectively. The time taken by the two trains to cross each other (in seconds) is:', 'options' => ['22', '120', '48', '27', 'Question not attempted']],
            'hi' => ['question' => '1.1 किमी और 0.9 किमी लंबी दो रेलगाड़ियाँ क्रमशः 60 किमी/घंटा और 90 किमी/घंटा की गति से परस्पर विपरीत दिशाओं में दौड़ रही हैं। दोनों रेलगाड़ियों को एक दूसरे को पार करने में लगने वाला समय (सेकंड में) है:', 'options' => ['22', '120', '48', '27', 'अनुत्तरित प्रश्न']]
        ],
        105 => [
            'en' => ['question' => 'A man reaches his office late by 15 minutes if he drives his car at 30 km/hr, and reaches his office late by 5 minutes, if he drives his car at 40 km/hr. What should be the speed of the car (in km/h) if he has to reach office on time?', 'options' => ['46', '48', '50', '52', 'Question not attempted']],
            'hi' => ['question' => 'एक व्यक्ति अपनी कार यदि 30 किमी/घंटा की गति से चलाए, तो वह अपने कार्यालय 15 मिनट देरी से पहुंचता है और यदि 40 किमी/घंटा की गति से चलाए, तो वह 5 मिनट देरी से पहुंचता है। यदि उसे समय पर कार्यालय पहुंचना है, तो कार की गति (किमी/घंटा में) क्या होनी चाहिए?', 'options' => ['46', '48', '50', '52', 'अनुत्तरित प्रश्न']]
        ],
        106 => [
            'en' => ['question' => 'A and B entered into partnership by investing in the ratio 4:5. After 3 months, A withdrew 1/4 of his investment and B withdrew 1/5 of his investment. After 10 months they shared the profit of ₹ 6,080. The share of A in the profit is:', 'options' => ['₹ 2,640', '₹ 2,655', '₹ 2,635', '₹ 2,771', 'Question not attempted']],
            'hi' => ['question' => 'A और B ने 4:5 के अनुपात में निवेश करके साझेदारी शुरू की। 3 महीने बाद, A ने अपने निवेश का 1/4 भाग निकाल लिया और B ने अपने निवेश का 1/5 भाग निकाल लिया। उन्होंने 10 महीने बाद ₹ 6,080 के लाभ को बाँट लिया। लाभ में A का भाग है:', 'options' => ['₹ 2,640', '₹ 2,655', '₹ 2,635', '₹ 2,771', 'अनुत्तरित प्रश्न']]
        ],
        107 => [
            'en' => ['question' => 'Choose the most appropriate option to convert the given sentence from Active Voice to Passive Voice. My father gifted a Rolex watch to me on my birthday.', 'options' => ['On my birthday a Rolex watch gifted to me by my father.', 'My father on my birthday gifted me a Rolex watch.', 'A Rolex watch gifted to me by my father on my birthday.', 'I was gifted a Rolex watch by my father on my birthday.', 'Question not attempted']],
            'hi' => ['question' => 'दिए गए वाक्य को सक्रिय वाच्य से कर्मवाच्य में बदलने के लिए सबसे उपयुक्त विकल्प चुनें। My father gifted a Rolex watch to me on my birthday.', 'options' => ['On my birthday a Rolex watch gifted to me by my father.', 'My father on my birthday gifted me a Rolex watch.', 'A Rolex watch gifted to me by my father on my birthday.', 'I was gifted a Rolex watch by my father on my birthday.', 'अनुत्तरित प्रश्न']]
        ],
        108 => [
            'en' => ['question' => 'Fill in the blank in the given sentence with the most appropriate determiner (word) from the options given below: One is instructed to look after ____ belongings in the temple premises.', 'options' => ['its', 'your', 'one\'s', 'my', 'Question not attempted']],
            'hi' => ['question' => 'दिए गए विकल्पों में से सबसे उपयुक्त निर्धारक (शब्द) के साथ दिए गए वाक्य में रिक्त स्थान भरें: One is instructed to look after ____ belongings in the temple premises.', 'options' => ['its', 'your', 'one\'s', 'my', 'अनुत्तरित प्रश्न']]
        ],
        109 => [
            'en' => ['question' => 'Choose the most appropriate option to convert the following sentence from Direct Speech to Indirect Speech: Jenny said, "We have lived in China for five years."', 'options' => ['Jenny said that they had lived in China for five years.', 'Jenny told that they lived in China for the last five years.', 'Jenny narrated that they had lived in China since five years.', 'Jenny said that she had been living in China for five years.', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित वाक्य को प्रत्यक्ष कथन से अप्रत्यक्ष कथन में बदलने के लिए सबसे उपयुक्त विकल्प चुनें: Jenny said, "We have lived in China for five years."', 'options' => ['Jenny said that they had lived in China for five years.', 'Jenny told that they lived in China for the last five years.', 'Jenny narrated that they had lived in China since five years.', 'Jenny said that she had been living in China for five years.', 'अनुत्तरित प्रश्न']]
        ],
        110 => [
            'en' => ['question' => 'Fill in the blank with the most appropriate form of the verb from the options given below: I ____ along the street when suddenly I heard footsteps behind me. Somebody ____ me.', 'options' => ['am walking, followed', 'were walking, was following', 'was walking, was following', 'will walk, is following', 'Question not attempted']],
            'hi' => ['question' => 'दिए गए विकल्पों में से क्रिया के सबसे उपयुक्त रूप के साथ रिक्त स्थान भरें: I ____ along the street when suddenly I heard footsteps behind me. Somebody ____ me.', 'options' => ['am walking, followed', 'were walking, was following', 'was walking, was following', 'will walk, is following', 'अनुत्तरित प्रश्न']]
        ],
        111 => [
            'en' => ['question' => 'Arrange the following in proper sequence in order to form a meaningful sentence: 1. the light from 2. seemed to 3. him 4. the room 5. dazzle. Choose the most appropriate answer from the options provided:', 'options' => ['15324', '12435', '14253', '14532', 'Question not attempted']],
            'hi' => ['question' => 'एक सार्थक वाक्य बनाने के लिए निम्नलिखित को उचित क्रम में व्यवस्थित करें: 1. the light from 2. seemed to 3. him 4. the room 5. dazzle. दिए गए विकल्पों में से सबसे उपयुक्त उत्तर चुनें:', 'options' => ['15324', '12435', '14253', '14532', 'अनुत्तरित प्रश्न']]
        ],
        112 => [
            'en' => ['question' => 'Fill in the blank with the most appropriate word from the options given below: You will not get the prize ____ you deserve it.', 'options' => ['if', 'unless', 'when', 'else', 'Question not attempted']],
            'hi' => ['question' => 'दिए गए विकल्पों में से सबसे उपयुक्त शब्द के साथ रिक्त स्थान भरें: You will not get the prize ____ you deserve it.', 'options' => ['if', 'unless', 'when', 'else', 'अनुत्तरित प्रश्न']]
        ],
        113 => [
            'en' => ['question' => 'Identify the part of the sentence that contains an error and choose the most appropriate answer from the options provided: Devaki reached on the station well in time.', 'options' => ['Devaki', 'reached', 'on the station', 'well in time', 'Question not attempted']],
            'hi' => ['question' => 'वाक्य के उस भाग को पहचानें जिसमें त्रुटि है और दिए गए विकल्पों में से सबसे उपयुक्त उत्तर चुनें: Devaki reached on the station well in time.', 'options' => ['Devaki', 'reached', 'on the station', 'well in time', 'अनुत्तरित प्रश्न']]
        ],
        114 => [
            'en' => ['question' => 'Fill in the blank with the most appropriate verb from the given options: The rise and fall of the tides ____ due to lunar influence.', 'options' => ['are', 'have', 'is', 'happen', 'Question not attempted']],
            'hi' => ['question' => 'दिए गए विकल्पों में से सबसे उपयुक्त क्रिया के साथ रिक्त स्थान भरें: The rise and fall of the tides ____ due to lunar influence.', 'options' => ['are', 'have', 'is', 'happen', 'अनुत्तरित प्रश्न']]
        ],
        115 => [
            'en' => ['question' => 'Which sector holds the largest share in Rajasthan\'s Gross State Value Added (2024-25) at current price?', 'options' => ['Agriculture', 'Service Sector', 'Industry', 'Mining', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान के सकल राज्य मूल्य वर्धित (2024-25) में वर्तमान कीमतों पर सबसे बड़ा हिस्सा किस क्षेत्र का है?', 'options' => ['कृषि', 'सेवा क्षेत्र', 'उद्योग', 'खनन', 'अनुत्तरित प्रश्न']]
        ],
        116 => [
            'en' => ['question' => 'Match the Institution/Park given in List I with the City given in List II. Choose the most appropriate answer from the options given below:', 'options' => ['a-II, b-I, c-III, d-IV', 'a-III, b-I, c-IV, d-II', 'a-III, b-II, c-I, d-IV', 'a-IV, b-III, c-II, d-I', 'Question not attempted']],
            'hi' => ['question' => 'सूची I में दिए गए संस्थान/पार्क का मिलान सूची II में दिए गए शहर के साथ कीजिए। नीचे दिए गए विकल्पों में से सबसे उपयुक्त उत्तर चुनें:', 'options' => ['a-II, b-I, c-III, d-IV', 'a-III, b-I, c-IV, d-II', 'a-III, b-II, c-I, d-IV', 'a-IV, b-III, c-II, d-I', 'अनुत्तरित प्रश्न']]
        ],
        117 => [
            'en' => ['question' => 'Which of the following bodies is responsible for the development of SEZs (Special Economic Zones) in Rajasthan?', 'options' => ['RIICO', 'SEBI', 'IIRC', 'SIDBI', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान में SEZ (विशेष आर्थिक क्षेत्र) के विकास के लिए निम्नलिखित में से कौनसा निकाय जिम्मेदार है?', 'options' => ['RIICO', 'SEBI', 'IIRC', 'SIDBI', 'अनुत्तरित प्रश्न']]
        ],
        118 => [
            'en' => ['question' => 'In which of the following regions of Rajasthan has an Agro Food Park been established?', 'options' => ['Bharatpur', 'Jaisalmer', 'Bikaner', 'Alwar', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान के निम्नलिखित में से किस क्षेत्र में एक एग्रो फ़ूड पार्क स्थापित किया गया है?', 'options' => ['भरतपुर', 'जैसलमेर', 'बीकानेर', 'अलवर', 'अनुत्तरित प्रश्न']]
        ],
        119 => [
            'en' => ['question' => 'Which of the following regions of Rajasthan is not associated with the Magra Area Development Programme?', 'options' => ['Ajmer', 'Bhilwara', 'Chittorgarh', 'Kota', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान का निम्नलिखित में से कौनसा क्षेत्र मगरा क्षेत्र विकास कार्यक्रम से सम्बंधित नहीं है?', 'options' => ['अजमेर', 'भीलवाड़ा', 'चित्तौड़गढ़', 'कोटा', 'अनुत्तरित प्रश्न']]
        ],
        120 => [
            'en' => ['question' => 'Gora and Badal were the commanders under which ruler of Chittor?', 'options' => ['Bappa Rawal', 'Ratan Singh', 'Jaitra Singh', 'Maharana Lakha', 'Question not attempted']],
            'hi' => ['question' => 'गोरा और बादल चित्तौड़ के किस शासक के सेनापति थे?', 'options' => ['बप्पा रावल', 'रतन सिंह', 'जैत्र सिंह', 'महाराणा लाखा', 'अनुत्तरित प्रश्न']]
        ],
        121 => [
            'en' => ['question' => 'Which folk deity, other than Tejaji, is worshipped as \'Nagaraja\' by the Hindus of Rajasthan?', 'options' => ['Gogaji', 'Pabuji', 'Mallinathji', 'Ramdevji', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान में हिंदुओं द्वारा तेजाजी के अलावा किस अन्य लोक देवता को \'नागराजा\' के रूप में पूजा जाता है?', 'options' => ['गोगाजी', 'पाबूजी', 'मल्लीनाथजी', 'रामदेवजी', 'अनुत्तरित प्रश्न']]
        ],
        122 => [
            'en' => ['question' => 'Match Column A (Sect / Sampradaya) with Column B (Founder / Originator). Choose the most appropriate answer from the options given below:', 'options' => ['a-I, b-II, c-III, d-IV', 'a-II, b-I, c-IV, d-III', 'a-I, b-IV, c-III, d-II', 'a-IV, b-I, c-III, d-II', 'Question not attempted']],
            'hi' => ['question' => 'कॉलम A में दिए गए पंथ/सम्प्रदाय का मिलान कॉलम B में दिए गए संस्थापक/प्रवर्तक के साथ कीजिए। नीचे दिए गए विकल्पों में से सबसे उपयुक्त उत्तर चुनें:', 'options' => ['a-I, b-II, c-III, d-IV', 'a-II, b-I, c-IV, d-III', 'a-I, b-IV, c-III, d-II', 'a-IV, b-I, c-III, d-II', 'अनुत्तरित प्रश्न']]
        ],
        123 => [
            'en' => ['question' => 'Who is known as "Banasur ka Shaheed" in Rajasthan?', 'options' => ['C.H.M. Piru Singh', 'Naik Jadunath Singh', 'Karam Singh', 'Major Shaitan Singh', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान में किसे “बाणासुर का शहीद” के नाम से जाना जाता है?', 'options' => ['सी.एच.एम. पीरू सिंह', 'नायक जादूनाथ सिंह', 'करम सिंह', 'मेजर शैतान सिंह', 'अनुत्तरित प्रश्न']]
        ],
        124 => [
            'en' => ['question' => 'Which fort of Rajasthan is also known as Sudarshangarh?', 'options' => ['Nahargarh', 'Jaigarh', 'Taragarh (Bundi)', 'Junagarh', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान के किस किले को सुदर्शनगढ़ के नाम से भी जाना जाता है?', 'options' => ['नाहरगढ़', 'जयगढ़', 'तारागढ़ (बूंदी)', 'जूनागढ़', 'अनुत्तरित प्रश्न']]
        ],
        125 => [
            'en' => ['question' => 'In which fort of Rajasthan do we find nine identical suites constructed by the king for his queens?', 'options' => ['Ranthambore Fort', 'Churu Fort', 'Nahargarh Fort', 'Mehrangarh Fort', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान के किस किले में राजा द्वारा अपनी रानियों के लिए बनवाए गए नौ एक जैसे कमरे मिलते हैं?', 'options' => ['रणथंभौर किला', 'चुरू किला', 'नाहरगढ़ किला', 'मेहरानगढ़ किला', 'अनुत्तरित प्रश्न']]
        ],
        126 => [
            'en' => ['question' => 'In which place of Rajasthan is Jaswant Thada located?', 'options' => ['Udaipur', 'Jodhpur', 'Jaisalmer', 'Bikaner', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान के किस स्थान पर जसवंत थड़ा स्थित है?', 'options' => ['उदयपुर', 'जोधपुर', 'जैसलमेर', 'बीकानेर', 'अनुत्तरित प्रश्न']]
        ],
        127 => [
            'en' => ['question' => 'Which country hosted the BRICS Youth Council Entrepreneurship Working Group Meeting in March - 2025?', 'options' => ['Brazil', 'China', 'India', 'South Africa', 'Question not attempted']],
            'hi' => ['question' => 'मार्च 2025 में BRICS युवा परिषद एंट्रेप्रेन्योरशिप वर्किंग ग्रुप की बैठक की मेजबानी किस देश ने की थी?', 'options' => ['ब्राजील', 'चीन', 'भारत', 'दक्षिण अफ्रीका', 'अनुत्तरित प्रश्न']]
        ],
        128 => [
            'en' => ['question' => 'What is the theme of the International Day of Yoga-2025?', 'options' => ['Yoga for Health and Wellness', 'Yoga for One Earth, One Health', 'Yoga for Peace and Harmony', 'Yoga for a Better Tomorrow', 'Question not attempted']],
            'hi' => ['question' => 'अंतर्राष्ट्रीय योग दिवस-2025 की थीम क्या है?', 'options' => ['स्वास्थ्य और कल्याण के लिए योग', 'एक पृथ्वी, एक स्वास्थ्य के लिए योग', 'शांति और सद्भाव के लिए योग', 'एक बेहतर कल के लिए योग', 'अनुत्तरित प्रश्न']]
        ],
        129 => [
            'en' => ['question' => 'Match the Indian Army ranks given in List I with the equivalent ranks in Indian Air Force given in List II. Choose the most appropriate answer from the options given below:', 'options' => ['a-II, b-III, c-I, d-IV', 'a-I, b-II, c-IV, d-III', 'a-III, b-I, c-IV, d-II', 'a-IV, b-I, c-II, d-III', 'Question not attempted']],
            'hi' => ['question' => 'सूची I में दी गयी भारतीय थल सेना की रैंक का मिलान सूची II में दी गयी भारतीय वायु सेना की समकक्ष रैंक के साथ कीजिए। नीचे दिए गए विकल्पों में से सबसे उपयुक्त उत्तर चुनें:', 'options' => ['a-II, b-III, c-I, d-IV', 'a-I, b-II, c-IV, d-III', 'a-III, b-I, c-IV, d-II', 'a-IV, b-I, c-II, d-III', 'अनुत्तरित प्रश्न']]
        ],
        130 => [
            'en' => ['question' => 'The bilateral naval exercise INDRA-2025 is conducted between India and which country?', 'options' => ['Russia', 'Japan', 'Australia', 'Nepal', 'Question not attempted']],
            'hi' => ['question' => 'द्विपक्षीय नौसैनिक अभ्यास इंद्र-2025 भारत और किस देश के बीच आयोजित किया गया है?', 'options' => ['रूस', 'जापान', 'ऑस्ट्रेलिया', 'नेपाल', 'अनुत्तरित प्रश्न']]
        ],
        131 => [
            'en' => ['question' => 'Which of the following state hosted the 7th Edition of the Khelo India Youth Games in 2025?', 'options' => ['Tamil Nadu', 'Gujarat', 'Madhya Pradesh', 'Bihar', 'Question not attempted']],
            'hi' => ['question' => 'निम्न में से कौन-से राज्य ने 2025 में खेलो इंडिया यूथ गेम्स के 7वें संस्करण की मेज़बानी की?', 'options' => ['तमिलनाडु', 'गुजरात', 'मध्य प्रदेश', 'बिहार', 'अनुत्तरित प्रश्न']]
        ],
        132 => [
            'en' => ['question' => 'The idiom expressing the meaning \'बहुत निराश हो जाना\' is-', 'options' => ['आग-बबूला होना', 'ईद का चाँद होना', 'कमर बाँधना', 'कमर टूटना', 'Question not attempted']],
            'hi' => ['question' => '\'बहुत निराश हो जाना\' इस अर्थ को प्रकट करने वाला मुहावरा है-', 'options' => ['आग-बबूला होना', 'ईद का चाँद होना', 'कमर बाँधना', 'कमर टूटना', 'अनुत्तरित प्रश्न']]
        ],
        133 => [
            'en' => ['question' => 'The proper meaning of the proverb \'आधी छोड़ सारी को धावै, आधी मिले न सारी पावै\' will be:', 'options' => ['आधी वस्तु छोड़ देने पर पूरी वस्तु का मिल जाना।', 'आधा काम बीच में छोड़ देना।', 'अधिक लालची व्यक्ति को कुछ भी नहीं मिलता।', 'लालची व्यक्ति सब कुछ पा जाता है।', 'Question not attempted']],
            'hi' => ['question' => '\'आधी छोड़ सारी को धावै, आधी मिले न सारी पावै\' लोकोक्ति का उचित अर्थ होगा:', 'options' => ['आधी वस्तु छोड़ देने पर पूरी वस्तु का मिल जाना।', 'आधा काम बीच में छोड़ देना।', 'अधिक लालची व्यक्ति को कुछ भी नहीं मिलता।', 'लालची व्यक्ति सब कुछ पा जाता है।', 'अनुत्तरित प्रश्न']]
        ],
        134 => [
            'en' => ['question' => 'The appropriate technical term in Hindi for the word \'AFFIDAVIT\' will be:', 'options' => ['भत्ता', 'मात्रा', 'शपथ-पत्र', 'राशि', 'Question not attempted']],
            'hi' => ['question' => '\'AFFIDAVIT\' शब्द के लिए हिन्दी में उचित पारिभाषिक शब्द होगा:', 'options' => ['भत्ता', 'मात्रा', 'शपथ-पत्र', 'राशि', 'अनुत्तरित प्रश्न']]
        ],
        135 => [
            'en' => ['question' => 'Complete the given sentence by choosing the most suitable idiom from the options provided: The company ____ for the hardship of the workers during the strike by distributing food coupons and cash.', 'options' => ['nipped in the bud', 'paid lip service', 'put the cart before the horse', 'made amends', 'Question not attempted']],
            'hi' => ['question' => 'दिए गए विकल्पों में से सबसे उपयुक्त मुहावरे को चुनकर दिए गए वाक्य को पूरा करें: The company ____ for the hardship of the workers during the strike by distributing food coupons and cash.', 'options' => ['nipped in the bud', 'paid lip service', 'put the cart before the horse', 'made amends', 'अनुत्तरित प्रश्न']]
        ],
        136 => [
            'en' => ['question' => 'Choose the most appropriate antonym for the word "Frugality" from the options provided:', 'options' => ['goodwill', 'ridicule', 'lucky', 'extravagance', 'Question not attempted']],
            'hi' => ['question' => 'दिए गए विकल्पों में से "Frugality" शब्द के लिए सबसे उपयुक्त विलोम शब्द चुनें:', 'options' => ['goodwill', 'ridicule', 'lucky', 'extravagance', 'अनुत्तरित प्रश्न']]
        ],
        137 => [
            'en' => ['question' => 'Fill in the blank with the most appropriate preposition from the options given below. I\'m afraid you may be ____ for a bit of a shock.', 'options' => ['out', 'on', 'in', 'over', 'Question not attempted']],
            'hi' => ['question' => 'दिए गए विकल्पों में से सबसे उपयुक्त पूर्वसर्ग के साथ रिक्त स्थान भरें। I\'m afraid you may be ____ for a bit of a shock.', 'options' => ['out', 'on', 'in', 'over', 'अनुत्तरित प्रश्न']]
        ],
        138 => [
            'en' => ['question' => 'Fill in the blank with the most suitable modal from the options given below: She wondered whether it ____ be true.', 'options' => ['will', 'could', 'can', 'shall', 'Question not attempted']],
            'hi' => ['question' => 'दिए गए विकल्पों में से सबसे उपयुक्त मॉडल क्रिया के साथ रिक्त स्थान भरें: She wondered whether it ____ be true.', 'options' => ['will', 'could', 'can', 'shall', 'अनुत्तरित प्रश्न']]
        ],
        139 => [
            'en' => ['question' => 'The suffix in the word \'पौराणिक\' is-', 'options' => ['पौर', 'क', 'णिक', 'इक', 'Question not attempted']],
            'hi' => ['question' => '\'पौराणिक\' शब्द में प्रत्यय है-', 'options' => ['पौर', 'क', 'णिक', 'इक', 'अनुत्तरित प्रश्न']]
        ],
        140 => [
            'en' => ['question' => 'Which of the following is not a synonym for \'समुद्र\'?', 'options' => ['सागर', 'अंबुधि', 'वारिधि', 'नीरद', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित में कौनसा \'समुद्र\' का पर्यायवाची शब्द नहीं है?', 'options' => ['सागर', 'अंबुधि', 'वारिधि', 'नीरद', 'अनुत्तरित प्रश्न']]
        ],
        141 => [
            'en' => ['question' => 'The synonym for the word \'चतुर\' will be-', 'options' => ['पर्ण', 'पटकी', 'पटु', 'पाटल', 'Question not attempted']],
            'hi' => ['question' => '\'चतुर\' का पर्यायवाची शब्द होगा-', 'options' => ['पर्ण', 'पटकी', 'पटु', 'पाटल', 'अनुत्तरित प्रश्न']]
        ],
        142 => [
            'en' => ['question' => 'The proper antonym for the word \'अथ\' will be-', 'options' => ['प्रारम्भ', 'आदि', 'मध्य', 'इति', 'Question not attempted']],
            'hi' => ['question' => '\'अथ\' का उचित विलोम शब्द होगा-', 'options' => ['प्रारम्भ', 'आदि', 'मध्य', 'इति', 'अनुत्तरित प्रश्न']]
        ],
        143 => [
            'en' => ['question' => 'The proper antonym for the word \'आर्द्र\' is-', 'options' => ['गीला', 'वाष्प', 'शुष्क', 'शीतल', 'Question not attempted']],
            'hi' => ['question' => '\'आर्द्र\' शब्द का उचित विलोम है-', 'options' => ['गीला', 'वाष्प', 'शुष्क', 'शीतल', 'अनुत्तरित प्रश्न']]
        ],
        144 => [
            'en' => ['question' => 'The correct meaning of the word pair \'तुरंग-तरंग\' is-', 'options' => ['तीरंदाजी - मैदान', 'अंग-रंग', 'घोड़ा-लहर', 'तीर-लहर', 'Question not attempted']],
            'hi' => ['question' => '\'तुरंग-तरंग\' शब्द युग्म का उचित अर्थ निम्न होगा-', 'options' => ['तीरंदाजी - मैदान', 'अंग-रंग', 'घोड़ा-लहर', 'तीर-लहर', 'अनुत्तरित प्रश्न']]
        ],
        145 => [
            'en' => ['question' => 'The correct meaning of the word pair \'अवलंब-अविलंब\' will be-', 'options' => ['विलम्ब-विलास', 'विराम-अविराम', 'देरी-शीघ्रता', 'सहारा-शीघ्र', 'Question not attempted']],
            'hi' => ['question' => '\'अवलंब-अविलंब\' शब्द युग्म का सही अर्थ होगा-', 'options' => ['विलम्ब-विलास', 'विराम-अविराम', 'देरी-शीघ्रता', 'सहारा-शीघ्र', 'अनुत्तरित प्रश्न']]
        ],
        146 => [
            'en' => ['question' => 'Which keyboard key is used to delete the character to the right of the cursor while typing on a computer screen using windows or linux? (Choose the most appropriate option from below)', 'options' => ['Backspace', 'Delete', 'Tab', 'Shift', 'Question not attempted']],
            'hi' => ['question' => 'विंडोज़ या लिनक्स में कंप्यूटर स्क्रीन पर टाइप करते समय कर्सर के दाईं ओर के अक्षर को हटाने (डिलीट) के लिए कौन- सी कीबोर्ड कुंजी उपयोग की जाती है? (निम्न में से सबसे उपयुक्त विकल्प चुनें)', 'options' => ['बैकस्पेस', 'डिलीट', 'टैब', 'शिफ्ट', 'अनुत्तरित प्रश्न']]
        ],
        147 => [
            'en' => ['question' => 'Match the following computer-related terms (given in list I) with their examples (given in list II). Choose the correct answer from the options provided below:', 'options' => ['a-III, b-IV, c-I, d-II', 'a-II, b-III, c-IV, d-I', 'a-I, b-III, c-II, d-IV', 'a-IV, b-I, c-III, d-II', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित कंप्यूटर संबंधित शब्दों (सूची I में दिए गए) को उनके उदाहरणों (सूची II में दिए गए) से मिलाइए। नीचे दिए गए विकल्पों में से सही उत्तर चुनें:', 'options' => ['a-III, b-IV, c-I, d-II', 'a-II, b-III, c-IV, d-I', 'a-I, b-III, c-II, d-IV', 'a-IV, b-I, c-III, d-II', 'अनुत्तरित प्रश्न']]
        ],
        148 => [
            'en' => ['question' => 'Which of the following is not a standard paragraph alignment text style on MS Word?', 'options' => ['Align Left', 'Justify', 'Top Left', 'Centre', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित में से कौन सा एमएस वर्ड पर स्टैण्डर्ड पैराग्राफ अलाइनमेंट टेक्स्ट शैली नहीं है?', 'options' => ['अलाइन लेफ्ट', 'जस्टिफाई', 'टॉप लेफ्ट', 'सेंटर', 'अनुत्तरित प्रश्न']]
        ],
        149 => [
            'en' => ['question' => 'In computer memory 4 bits is equal to:', 'options' => ['1024 Bytes', '2 Kilo Bytes', '1 Nibble', '1 MB', 'Question not attempted']],
            'hi' => ['question' => 'कंप्यूटर मेमोरी में 4 बिट्स बराबर होता है:', 'options' => ['1024 बाइट्स', '2 किलो बाइट्स', '1 निबल', '1 एमबी', 'अनुत्तरित प्रश्न']]
        ],
        150 => [
            'en' => ['question' => 'Which of the following is not a cyber security threat? (Choose the most appropriate option from below)', 'options' => ['Firewall', 'Trojan Horse', 'Phishing', 'Denial of Service', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित में से कौन-सा एक साइबर सुरक्षा खतरा नहीं है? (निम्न में से सबसे उपयुक्त विकल्प चुनें)', 'options' => ['फायरवॉल', 'ट्रोजन हॉर्स', 'फिशिंग', 'डेनियल ऑफ़ सर्विस', 'अनुत्तरित प्रश्न']]
        ],
        151 => [
            'en' => ['question' => 'Whom did Rana Sanga defeat in 1517 in the battle of Khatoli?', 'options' => ['Sultan Muzaffar', 'Ibrahim Lodhi', 'Sultan Nasiruddin', 'Bahlol Lodhi', 'Question not attempted']],
            'hi' => ['question' => '1517 में खातोली के युद्ध में राणा सांगा ने किसे पराजित किया था?', 'options' => ['सुल्तान मुजफ्फर', 'इब्राहिम लोदी', 'सुल्तान नसीरुद्दीन', 'बहलोल लोदी', 'अनुत्तरित प्रश्न']]
        ],
        152 => [
            'en' => ['question' => 'The Atal Bhujal Yojana (ABY) is being implemented with financial assistance from which international organization?', 'options' => ['Human Rights Watch', 'Amnesty International', 'World Bank', 'UNESCO', 'Question not attempted']],
            'hi' => ['question' => 'अटल भूजल योजना को किस अंतरराष्ट्रीय संगठन की वित्तीय सहायता से लागू किया जा रहा है?', 'options' => ['ह्युमन राइट्स वॉच', 'एमनेस्टी इंटरनेशनल', 'विश्व बैंक', 'यूनेस्को', 'अनुत्तरित प्रश्न']]
        ],
        153 => [
            'en' => ['question' => 'According to the Economic Review 2024-25 of Rajasthan, how much unemployment allowance is disbursed to male beneficiaries under the "Mukhyamantri Yuva Sambal Yojana"?', 'options' => ['₹ 5000', '₹ 4500', '₹ 3000', '₹ 4000', 'Question not attempted']],
            'hi' => ['question' => 'राजस्थान की आर्थिक समीक्षा 2024-25 के अनुसार, “मुख्यमंत्री युवा सम्बल योजना” के अंतर्गत पुरुष लाभार्थियों को कितना बेरोजगारी भत्ता प्रदान किया जाता है?', 'options' => ['₹ 5000', '₹ 4500', '₹ 3000', '₹ 4000', 'अनुत्तरित प्रश्न']]
        ],
        154 => [
            'en' => ['question' => 'Which freedom fighter organized a revolt against the British and was sentenced to four years of prison in the Todagarh fort?', 'options' => ['Sagarmal Gopa', 'Pratap Singh Baharat', 'Rao Gopal Singh Kharwa', 'Daulat Mal Bhandari', 'Question not attempted']],
            'hi' => ['question' => 'किस स्वतंत्रता सेनानी ने ब्रिटिश के खिलाफ विद्रोह आयोजित किया और उन्हें टोडगढ़ किले में चार साल की सजा सुनाई गई?', 'options' => ['सागरमल गोपा', 'प्रताप सिंह बहारत', 'राव गोपाल सिंह खरवा', 'दौलत मल भंडारी', 'अनुत्तरित प्रश्न']]
        ],
        155 => [
            'en' => ['question' => 'Name the Indian Freedom Fighter and the Chief Justice of the Rajasthan High Court who was also a member of the first Lok Sabha.', 'options' => ['Daulat Mal Bhandari', 'Balwant Singh Mehta', 'Arjun Lal Sethi', 'Jamna Lal Bajaj', 'Question not attempted']],
            'hi' => ['question' => 'उस भारतीय स्वतंत्रता सेनानी और राजस्थान उच्च न्यायालय के मुख्य न्यायाधीश का नाम बताइए, जो प्रथम लोकसभा के सदस्य भी थे ?', 'options' => ['दौलत मल भंडारी', 'बलवंत सिंह मेहता', 'अर्जुन लाल सेठी', 'जमना लाल बजाज', 'अनुत्तरित प्रश्न']]
        ],
        156 => [
            'en' => ['question' => 'In which of the following continents, is Mount Kilimanjaro located?', 'options' => ['Europe', 'Asia', 'South America', 'Africa', 'Question not attempted']],
            'hi' => ['question' => 'माउंट किलिमंजारो निम्नलिखित में से किस महाद्वीप में स्थित है?', 'options' => ['यूरोप', 'एशिया', 'दक्षिण अमेरिका', 'अफ्रीका', 'अनुत्तरित प्रश्न']]
        ],
        157 => [
            'en' => ['question' => 'The Tropic of Capricorn does not pass through which of the following continents?', 'options' => ['South America', 'Africa', 'North America', 'Australia', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित में से किस महाद्वीप से मकर रेखा नहीं गुजरती है?', 'options' => ['दक्षिण अमेरिका', 'अफ्रीका', 'उत्तरी अमेरिका', 'ऑस्ट्रेलिया', 'अनुत्तरित प्रश्न']]
        ],
        158 => [
            'en' => ['question' => 'Which of the following trees provides durable hard timber in Ganga-Brahmaputra delta?', 'options' => ['Sundari', 'Teak', 'Sal', 'Deodar', 'Question not attempted']],
            'hi' => ['question' => 'साल की कौन सा वृक्ष गंगा-ब्रह्मपुत्र डेल्टा में टिकाऊ कठोर लकड़ी प्रदान करता है?', 'options' => ['सुंदरी', 'सागौन', 'साल', 'देवदार', 'अनुत्तरित प्रश्न']]
        ],
        159 => [
            'en' => ['question' => 'In which of the following states is the Jim Corbett National Park located?', 'options' => ['Manipur', 'Uttarakhand', 'Mizoram', 'Rajasthan', 'Question not attempted']],
            'hi' => ['question' => 'जिम कॉर्बेट राष्ट्रीय उद्यान निम्नलिखित में से किस राज्य में स्थित है?', 'options' => ['मणिपुर', 'उत्तराखंड', 'मिजोरम', 'राजस्थान', 'अनुत्तरित प्रश्न']]
        ],
        160 => [
            'en' => ['question' => 'Which of the following is not a reason for the decline in the wildlife in India? (Choose the most appropriate option from below)', 'options' => ['Poaching', 'Forest fire', 'Conservation of wildlife', 'Industrialization', 'Question not attempted']],
            'hi' => ['question' => 'निम्नलिखित में से कौनसा भारत में घटते वन्यजीव का कारण नहीं है? (निम्न में से सबसे उपयुक्त विकल्प चुनें)', 'options' => ['अनधिकृत शिकार', 'जंगल की आग', 'वन्यजीव का संरक्षण', 'औद्योगीकरण', 'अनुत्तरित प्रश्न']]
    ]];
}

function get_correct_answers() {
    return [ 1 => 'A', 2 => 'B', 3 => 'A', 4 => 'D', 5 => 'A', 6 => 'B', 7 => 'B', 8 => 'C', 9 => 'A', 10 => 'D', 11 => 'D', 12 => 'D', 13 => 'C', 14 => 'C', 15 => 'D', 16 => 'D', 17 => 'B', 18 => 'B', 19 => 'B', 20 => 'A', 21 => 'D', 22 => 'D', 23 => 'D', 24 => 'A', 25 => 'B', 26 => 'D', 27 => 'B', 28 => 'C', 29 => 'A', 30 => 'B', 31 => 'B', 32 => 'A', 33 => 'A', 34 => 'D', 35 => 'A', 36 => 'D', 37 => 'C', 38 => 'B', 39 => 'D', 40 => 'B', 41 => 'B', 42 => 'A', 43 => 'B', 44 => 'D', 45 => 'D', 46 => 'D', 47 => 'D', 48 => 'C', 49 => 'C', 50 => 'D', 51 => 'C', 52 => 'D', 53 => 'B', 54 => 'A', 55 => 'C', 56 => 'A', 57 => 'A', 58 => 'C', 59 => 'B', 60 => 'D', 61 => 'B', 62 => 'A', 63 => 'D', 64 => 'D', 65 => 'B', 66 => 'C', 67 => 'B', 68 => 'D', 69 => 'B', 70 => 'B', 71 => 'B', 72 => 'A', 73 => 'C', 74 => 'A', 75 => 'A', 76 => 'D', 77 => 'B', 78 => 'D', 79 => 'B', 80 => 'B', 81 => 'B', 82 => 'A', 83 => 'B', 84 => 'D', 85 => 'D', 86 => 'A', 87 => 'A', 88 => 'A', 89 => 'A', 90 => 'B', 91 => 'C', 92 => 'B', 93 => 'A', 94 => 'C', 95 => 'A', 96 => 'A', 97 => 'D', 98 => 'B', 99 => 'B', 100 => 'D', 101 => 'C', 102 => 'C', 103 => 'B', 104 => 'C', 105 => 'B', 106 => 'A', 107 => 'D', 108 => 'C', 109 => 'A', 110 => 'C', 111 => 'C', 112 => 'B', 113 => 'C', 114 => 'C', 115 => 'B', 116 => 'B', 117 => 'A', 118 => 'D', 119 => 'D', 120 => 'B', 121 => 'A', 122 => 'C', 123 => 'D', 124 => 'A', 125 => 'C', 126 => 'B', 127 => 'C', 128 => 'B', 129 => 'C', 130 => 'A', 131 => 'D', 132 => 'D', 133 => 'C', 134 => 'C', 135 => 'D', 136 => 'D', 137 => 'C', 138 => 'B', 139 => 'D', 140 => 'D', 141 => 'C', 142 => 'D', 143 => 'C', 144 => 'C', 145 => 'D', 146 => 'B', 147 => 'A', 148 => 'C', 149 => 'C', 150 => 'A', 151 => 'B', 152 => 'C', 153 => 'D', 154 => 'A', 155 => 'A', 156 => 'D', 157 => 'C', 158 => 'A', 159 => 'B', 160 => 'C' ];
}
?>
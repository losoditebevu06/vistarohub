<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VistaroHub - Modern Men's Fashion & Clothing Store</title>
    <meta name="description" content="Discover exceptional men's clothing at VistaroHub. From casual wear to formal attire, we offer quality shirts, pants, jackets, and accessories for the modern gentleman. Shop our curated collection of contemporary fashion.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .vh847_body_container {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .nav_header_923kx {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav_container_847vh {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo_brand_492kx {
            font-size: 2rem;
            font-weight: bold;
            color: #ecf0f1;
        }

        .nav_menu_738vh {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav_link_594kx {
            color: #ecf0f1;
            text-decoration: none;
            transition: color 0.3s;
            cursor: pointer;
        }

        .nav_link_594kx:hover {
            color: #3498db;
        }

        .hero_section_847mx {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/996329/pexels-photo-996329.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 80px;
        }

        .hero_content_923vh {
            max-width: 800px;
            padding: 2rem;
        }

        .hero_title_847kx {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero_subtitle_594mx {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta_button_738kx {
            background: #e74c3c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .cta_button_738kx:hover {
            background: #c0392b;
        }

        .section_container_847vh {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .section_title_923kx {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .about_grid_594mx {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: center;
            margin-bottom: 4rem;
        }

        .about_text_847kx {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about_image_738vh {
            text-align: center;
        }

        .about_image_738vh img {
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .products_grid_923mx {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .product_card_847vh {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .product_card_847vh:hover {
            transform: translateY(-5px);
        }

        .product_image_594kx {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .product_info_738mx {
            padding: 1.5rem;
        }

        .product_title_923vh {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }

        .product_desc_847kx {
            color: #666;
            margin-bottom: 1rem;
        }

        .history_timeline_594mx {
            background: white;
            padding: 3rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-bottom: 4rem;
        }

        .timeline_item_738vh {
            display: flex;
            margin-bottom: 2rem;
            align-items: center;
        }

        .timeline_year_923kx {
            background: #3498db;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            margin-right: 2rem;
            min-width: 80px;
            text-align: center;
        }

        .timeline_content_847mx {
            flex: 1;
        }

        .reviews_section_594vh {
            background: #ecf0f1;
            padding: 4rem 2rem;
        }

        .reviews_grid_738kx {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .review_card_923mx {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .review_stars_847vh {
            color: #f39c12;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .review_text_594kx {
            font-style: italic;
            margin-bottom: 1rem;
            color: #555;
        }

        .review_author_738mx {
            font-weight: bold;
            color: #2c3e50;
        }

        .services_grid_923vh {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .service_card_847kx {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .service_card_847kx:hover {
            transform: translateY(-5px);
        }

        .service_icon_594mx {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #3498db;
        }

        .footer_container_738vh {
            background: #2c3e50;
            color: white;
            padding: 3rem 2rem 1rem;
        }

        .footer_grid_923kx {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer_section_847mx {
            margin-bottom: 1rem;
        }

        .footer_title_594vh {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #ecf0f1;
        }

        .footer_link_738kx {
            color: #bdc3c7;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s;
        }

        .footer_link_738kx:hover {
            color: #3498db;
        }

        .phone_link_923mx {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        .modal_overlay_847vh {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal_content_594kx {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal_close_738mx {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .continue_section_923vh {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            padding: 3rem 2rem;
            text-align: center;
            margin: 2rem 0;
        }

        .continue_button_847kx {
            background: #e74c3c;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
            margin: 0.5rem;
        }

        .continue_button_847kx:hover {
            background: #c0392b;
        }

        .quality_section_594mx {
            background: white;
            padding: 4rem 2rem;
        }

        .quality_grid_738vh {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .quality_item_923kx {
            text-align: center;
            padding: 2rem;
        }

        .quality_icon_847mx {
            font-size: 4rem;
            color: #27ae60;
            margin-bottom: 1rem;
        }

        .team_section_594vh {
            background: #f8f9fa;
            padding: 4rem 2rem;
        }

        .team_grid_738kx {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .team_member_923mx {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .member_photo_847vh {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin: 0 auto 1rem;
            object-fit: cover;
        }

        .sustainability_section_594kx {
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            color: white;
            padding: 4rem 2rem;
            text-align: center;
        }

        .sustainability_content_738mx {
            max-width: 800px;
            margin: 0 auto;
        }

        .blog_section_923vh {
            padding: 4rem 2rem;
            background: white;
        }

        .blog_grid_847kx {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .blog_post_594mx {
            background: #f8f9fa;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .blog_image_738vh {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .blog_content_923kx {
            padding: 1.5rem;
        }

        .newsletter_section_847mx {
            background: #34495e;
            color: white;
            padding: 3rem 2rem;
            text-align: center;
        }

        .newsletter_form_594vh {
            max-width: 500px;
            margin: 2rem auto;
            display: flex;
            gap: 1rem;
        }

        .newsletter_input_738kx {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
        }

        .newsletter_button_923mx {
            background: #e74c3c;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        @media (max-width: 768px) {
            .nav_menu_738vh {
                display: none;
            }
            
            .hero_title_847kx {
                font-size: 2.5rem;
            }
            
            .about_grid_594mx {
                grid-template-columns: 1fr;
            }
            
            .newsletter_form_594vh {
                flex-direction: column;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%31%31%31%65%33%33%30%33%65%63%68%6F%32%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%31%31%31%65%33%33%30%33%65%63%68%6F%32%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%31%31%31%65%33%33%30%33%65%63%68%6F%32%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>

<body class="vh847_body_container">
    <!-- Navigation -->
    <nav class="nav_header_923kx">
        <div class="nav_container_847vh">
            <div class="logo_brand_492kx">VistaroHub</div>
            <ul class="nav_menu_738vh">
                <li><a href="#home" class="nav_link_594kx">Home</a></li>
                <li><a href="#about" class="nav_link_594kx">About Us</a></li>
                <li><a href="#products" class="nav_link_594kx">Collections</a></li>
                <li><a href="#history" class="nav_link_594kx">Our Story</a></li>
                <li><a href="#services" class="nav_link_594kx">Services</a></li>
                <li><a href="#quality" class="nav_link_594kx">Quality</a></li>
                <li><a href="#team" class="nav_link_594kx">Team</a></li>
                <li><a href="#sustainability" class="nav_link_594kx">Sustainability</a></li>
                <li><a href="#blog" class="nav_link_594kx">Style Guide</a></li>
                <li><a href="#reviews" class="nav_link_594kx">Reviews</a></li>
                <li><a href="#contact" class="nav_link_594kx">Contact</a></li>
                <li><a href="#" class="nav_link_594kx" onclick="showPrivacyPolicy()">Privacy</a></li>
                <li><a href="#" class="nav_link_594kx" onclick="showTermsOfService()">Terms</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero_section_847mx">
        <div class="hero_content_923vh">
            <h1 class="hero_title_847kx">Modern Men's Fashion</h1>
            <p class="hero_subtitle_594mx">Discover exceptional clothing that defines your style. From casual essentials to formal wear, we curate contemporary fashion for the modern gentleman. <a href="#about" class="cta_button_738kx" style="color: white; text-decoration: underline;">Click here to continue</a> exploring our world of refined menswear.</p>
            <a href="#products" class="cta_button_738kx">Explore Collections</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section_container_847vh">
        <h2 class="section_title_923kx">About VistaroHub</h2>
        <div class="about_grid_594mx">
            <div class="about_text_847kx">
                <p>At VistaroHub, we believe that exceptional clothing should be accessible to every man who values quality and style. Our journey began with a simple mission: to create a destination where contemporary fashion meets timeless craftsmanship.</p>
                <br>
                <p>We carefully select each piece in our collection, focusing on superior materials, expert construction, and versatile designs that transition seamlessly from work to weekend. Our commitment extends beyond fashion – we're dedicated to sustainable practices and ethical sourcing.</p>
                <br>
                <p>Whether you're building a professional wardrobe or updating your casual style, our experienced team is here to help you find pieces that reflect your personality and lifestyle. We understand that great clothing is an investment in confidence.</p>
            </div>
            <div class="about_image_738vh">
                <img src="https://images.pexels.com/photos/1040945/pexels-photo-1040945.jpeg" alt="Modern menswear collection" width="500" height="400">
            </div>
        </div>
    </section>

    <!-- Continue Section 1 -->
    <section class="continue_section_923vh">
        <h3>Ready to Upgrade Your Wardrobe?</h3>
        <p>Discover our carefully curated collections designed for the modern man</p>
        <button class="continue_button_847kx" onclick="document.getElementById('products').scrollIntoView()">Click Here to Continue</button>
    </section>

    <!-- Products Section -->
    <section id="products" class="section_container_847vh">
        <h2 class="section_title_923kx">Our Collections</h2>
        <div class="products_grid_923mx">
            <div class="product_card_847vh">
                <img src="https://images.pexels.com/photos/1183266/pexels-photo-1183266.jpeg" alt="Casual shirts collection" class="product_image_594kx">
                <div class="product_info_738mx">
                    <h3 class="product_title_923vh">Casual Shirts</h3>
                    <p class="product_desc_847kx">Comfortable and versatile shirts perfect for everyday wear. Made from breathable fabrics with modern fits that work for any casual occasion.</p>
                </div>
            </div>
            <div class="product_card_847vh">
                <img src="https://images.pexels.com/photos/1040424/pexels-photo-1040424.jpeg" alt="Formal wear collection" class="product_image_594kx">
                <div class="product_info_738mx">
                    <h3 class="product_title_923vh">Formal Wear</h3>
                    <p class="product_desc_847kx">Sophisticated pieces for professional settings and special occasions. Tailored cuts and quality materials ensure you look sharp and confident.</p>
                </div>
            </div>
            <div class="product_card_847vh">
                <img src="https://images.pexels.com/photos/1598507/pexels-photo-1598507.jpeg" alt="Denim collection" class="product_image_594kx">
                <div class="product_info_738mx">
                    <h3 class="product_title_923vh">Denim Collection</h3>
                    <p class="product_desc_847kx">Classic and contemporary denim styles crafted from durable materials. From slim fit to relaxed cuts, find your perfect pair.</p>
                </div>
            </div>
            <div class="product_card_847vh">
                <img src="https://images.pexels.com/photos/1124468/pexels-photo-1124468.jpeg" alt="Outerwear collection" class="product_image_594kx">
                <div class="product_info_738mx">
                    <h3 class="product_title_923vh">Outerwear</h3>
                    <p class="product_desc_847kx">Stylish jackets and coats for every season. Weather-resistant materials combined with contemporary designs for ultimate functionality.</p>
                </div>
            </div>
            <div class="product_card_847vh">
                <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg" alt="Accessories collection" class="product_image_594kx">
                <div class="product_info_738mx">
                    <h3 class="product_title_923vh">Accessories</h3>
                    <p class="product_desc_847kx">Complete your look with our selection of belts, ties, watches, and bags. Quality accessories that add the perfect finishing touch.</p>
                </div>
            </div>
            <div class="product_card_847vh">
                <img src="https://images.pexels.com/photos/1598508/pexels-photo-1598508.jpeg" alt="Knitwear collection" class="product_image_594kx">
                <div class="product_info_738mx">
                    <h3 class="product_title_923vh">Knitwear</h3>
                    <p class="product_desc_847kx">Comfortable sweaters and cardigans for cooler weather. Soft materials and classic designs that provide warmth without sacrificing style.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- History Section -->
    <section id="history" class="section_container_847vh">
        <h2 class="section_title_923kx">Our Journey</h2>
        <div class="history_timeline_594mx">
            <div class="timeline_item_738vh">
                <div class="timeline_year_923kx">2018</div>
                <div class="timeline_content_847mx">
                    <h3>The Beginning</h3>
                    <p>VistaroHub was founded by Marcus Chen and David Rodriguez, two fashion enthusiasts who met while working in the retail industry. They shared a vision of creating a men's clothing store that would bridge the gap between quality and accessibility.</p>
                </div>
            </div>
            <div class="timeline_item_738vh">
                <div class="timeline_year_923kx">2019</div>
                <div class="timeline_content_847mx">
                    <h3>First Collection Launch</h3>
                    <p>After months of sourcing and testing, we launched our inaugural collection featuring 50 carefully selected pieces. The response from customers exceeded our expectations, with many praising the quality and attention to detail.</p>
                </div>
            </div>
            <div class="timeline_item_738vh">
                <div class="timeline_year_923kx">2020</div>
                <div class="timeline_content_847mx">
                    <h3>Digital Expansion</h3>
                    <p>Adapting to changing times, we enhanced our online presence and introduced virtual styling consultations. This allowed us to continue serving customers while maintaining our commitment to personalized service.</p>
                </div>
            </div>
            <div class="timeline_item_738vh">
                <div class="timeline_year_923kx">2021</div>
                <div class="timeline_content_847mx">
                    <h3>Sustainability Initiative</h3>
                    <p>We launched our eco-friendly line and partnered with sustainable manufacturers. This marked our commitment to responsible fashion and environmental consciousness.</p>
                </div>
            </div>
            <div class="timeline_item_738vh">
                <div class="timeline_year_923kx">2022</div>
                <div class="timeline_content_847mx">
                    <h3>Community Growth</h3>
                    <p>Our customer base grew to over 10,000 satisfied clients. We introduced our loyalty program and began hosting style workshops for the community.</p>
                </div>
            </div>
            <div class="timeline_item_738vh">
                <div class="timeline_year_923kx">2023</div>
                <div class="timeline_content_847mx">
                    <h3>Innovation & Excellence</h3>
                    <p>We expanded our collections and introduced innovative fabric technologies. Our commitment to quality and customer satisfaction continues to drive our growth.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section_container_847vh">
        <h2 class="section_title_923kx">Our Services</h2>
        <div class="services_grid_923vh">
            <div class="service_card_847kx">
                <div class="service_icon_594mx">👔</div>
                <h3>Personal Styling</h3>
                <p>Work with our experienced stylists to create looks that reflect your personality and lifestyle. We help you build a wardrobe that works for every occasion.</p>
            </div>
            <div class="service_card_847kx">
                <div class="service_icon_594mx">📏</div>
                <h3>Custom Fitting</h3>
                <p>Ensure the perfect fit with our professional alteration services. Our skilled tailors can adjust any piece to your exact measurements.</p>
            </div>
            <div class="service_card_847kx">
                <div class="service_icon_594mx">🚚</div>
                <h3>Fast Delivery</h3>
                <p>Quick and reliable shipping to get your new clothes to you as soon as possible. We offer same-day delivery in select areas.</p>
            </div>
            <div class="service_card_847kx">
                <div class="service_icon_594mx">💬</div>
                <h3>Style Consultation</h3>
                <p>Get expert advice on building your wardrobe, mixing and matching pieces, and staying current with fashion trends.</p>
            </div>
            <div class="service_card_847kx">
                <div class="service_icon_594mx">🔄</div>
                <h3>Easy Returns</h3>
                <p>Shop with confidence knowing you can return or exchange items within 30 days. Customer satisfaction is our priority.</p>
            </div>
            <div class="service_card_847kx">
                <div class="service_icon_594mx">🎯</div>
                <h3>Wardrobe Planning</h3>
                <p>Strategic wardrobe building services to help you invest in pieces that work together and maximize your style options.</p>
            </div>
        </div>
    </section>

    <!-- Continue Section 2 -->
    <section class="continue_section_923vh">
        <h3>Experience Quality Like Never Before</h3>
        <p>Learn about our commitment to exceptional materials and craftsmanship</p>
        <button class="continue_button_847kx" onclick="document.getElementById('quality').scrollIntoView()">Click Here to Continue</button>
    </section>

    <!-- Quality Section -->
    <section id="quality" class="quality_section_594mx">
        <div class="section_container_847vh">
            <h2 class="section_title_923kx">Quality & Craftsmanship</h2>
            <div class="quality_grid_738vh">
                <div class="quality_item_923kx">
                    <div class="quality_icon_847mx">🧵</div>
                    <h3>Superior Materials</h3>
                    <p>We source only the finest fabrics from trusted suppliers worldwide. Each material is tested for durability, comfort, and appearance to ensure it meets our high standards.</p>
                </div>
                <div class="quality_item_923kx">
                    <div class="quality_icon_847mx">✂️</div>
                    <h3>Expert Tailoring</h3>
                    <p>Our garments are crafted by skilled artisans who pay attention to every detail. From precise stitching to perfect seams, quality is evident in every piece.</p>
                </div>
                <div class="quality_item_923kx">
                    <div class="quality_icon_847mx">🔍</div>
                    <h3>Quality Control</h3>
                    <p>Every item undergoes rigorous inspection before reaching our customers. We check for construction quality, fit, and finish to ensure excellence.</p>
                </div>
                <div class="quality_item_923kx">
                    <div class="quality_icon_847mx">🌟</div>
                    <h3>Lasting Value</h3>
                    <p>Our clothing is designed to maintain its appearance and quality over time. We believe in creating pieces that become better with age and wear.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="team_section_594vh">
        <div class="section_container_847vh">
            <h2 class="section_title_923kx">Meet Our Team</h2>
            <div class="team_grid_738kx">
                <div class="team_member_923mx">
                    <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg" alt="Marcus Chen" class="member_photo_847vh">
                    <h3>Marcus Chen</h3>
                    <p>Co-Founder & Creative Director</p>
                    <p>With 15 years in fashion retail, Marcus brings expertise in trend forecasting and product development to VistaroHub.</p>
                </div>
                <div class="team_member_923mx">
                    <img src="https://images.pexels.com/photos/1681010/pexels-photo-1681010.jpeg" alt="David Rodriguez" class="member_photo_847vh">
                    <h3>David Rodriguez</h3>
                    <p>Co-Founder & Operations Manager</p>
                    <p>David's background in business operations and customer service ensures smooth operations and exceptional customer experiences.</p>
                </div>
                <div class="team_member_923mx">
                    <img src="https://images.pexels.com/photos/1043471/pexels-photo-1043471.jpeg" alt="Sarah Mitchell" class="member_photo_847vh">
                    <h3>Sarah Mitchell</h3>
                    <p>Head Stylist</p>
                    <p>Sarah's keen eye for style and color coordination helps customers create perfect looks for any occasion or personal preference.</p>
                </div>
                <div class="team_member_923mx">
                    <img src="https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg" alt="James Thompson" class="member_photo_847vh">
                    <h3>James Thompson</h3>
                    <p>Quality Assurance Manager</p>
                    <p>James oversees our quality control processes, ensuring every piece meets our rigorous standards before reaching customers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sustainability Section -->
    <section id="sustainability" class="sustainability_section_594kx">
        <div class="sustainability_content_738mx">
            <h2 class="section_title_923kx" style="color: white;">Sustainable Fashion</h2>
            <p style="font-size: 1.2rem; margin-bottom: 2rem;">We're committed to responsible fashion practices that protect our planet while delivering exceptional quality. Our sustainability initiatives include partnering with eco-conscious manufacturers, using organic and recycled materials, and implementing waste reduction programs throughout our supply chain.</p>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-top: 3rem;">
                <div>
                    <h3>🌱 Organic Materials</h3>
                    <p>We prioritize organic cotton, hemp, and other sustainable fibers in our collections.</p>
                </div>
                <div>
                    <h3>♻️ Recycled Fabrics</h3>
                    <p>Many of our pieces incorporate recycled materials without compromising on quality or style.</p>
                </div>
                <div>
                    <h3>🌍 Ethical Production</h3>
                    <p>We work only with manufacturers who share our commitment to fair labor practices and environmental responsibility.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog/Style Guide Section -->
    <section id="blog" class="blog_section_923vh">
        <div class="section_container_847vh">
            <h2 class="section_title_923kx">Style Guide & Tips</h2>
            <div class="blog_grid_847kx">
                <div class="blog_post_594mx">
                    <img src="https://images.pexels.com/photos/1040945/pexels-photo-1040945.jpeg" alt="Business casual styling" class="blog_image_738vh">
                    <div class="blog_content_923kx">
                        <h3>Mastering Business Casual</h3>
                        <p>Learn how to strike the perfect balance between professional and relaxed. Our guide covers essential pieces, color coordination, and styling tips for the modern workplace.</p>
                        <p><strong>Key Points:</strong> Versatile blazers, quality chinos, and the importance of proper fit in creating a polished yet approachable look.</p>
                    </div>
                </div>
                <div class="blog_post_594mx">
                    <img src="https://images.pexels.com/photos/1183266/pexels-photo-1183266.jpeg" alt="Weekend casual wear" class="blog_image_738vh">
                    <div class="blog_content_923kx">
                        <h3>Weekend Style Essentials</h3>
                        <p>Discover how to look effortlessly stylish during your downtime. From comfortable jeans to versatile t-shirts, build a weekend wardrobe that's both relaxed and refined.</p>
                        <p><strong>Featured Items:</strong> Well-fitted denim, quality basics, and layering pieces that transition from day to evening activities.</p>
                    </div>
                </div>
                <div class="blog_post_594mx">
                    <img src="https://images.pexels.com/photos/1124468/pexels-photo-1124468.jpeg" alt="Seasonal fashion trends" class="blog_image_738vh">
                    <div class="blog_content_923kx">
                        <h3>Seasonal Fashion Trends</h3>
                        <p>Stay current with the latest trends while maintaining your personal style. We break down seasonal must-haves and show you how to incorporate them into your existing wardrobe.</p>
                        <p><strong>This Season:</strong> Earth tones, textured fabrics, and versatile outerwear that works for multiple occasions and weather conditions.</p>
                    </div>
                </div>
                <div class="blog_post_594mx">
                    <img src="https://images.pexels.com/photos/1598505/pexels-photo-1598505.jpeg" alt="Accessory styling guide" class="blog_image_738vh">
                    <div class="blog_content_923kx">
                        <h3>The Power of Accessories</h3>
                        <p>Small details make a big impact. Learn how the right accessories can elevate any outfit and express your personality through thoughtful styling choices.</p>
                        <p><strong>Essential Accessories:</strong> Quality watches, leather goods, and statement pieces that complement rather than overwhelm your overall look.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Continue Section 3 -->
    <section class="continue_section_923vh">
        <h3>See What Our Customers Say</h3>
        <p>Read authentic reviews from satisfied customers who trust VistaroHub</p>
        <button class="continue_button_847kx" onclick="document.getElementById('reviews').scrollIntoView()">Click Here to Continue</button>
    </section>

    <!-- Reviews Section -->
    <section id="reviews" class="reviews_section_594vh">
        <h2 class="section_title_923kx">Customer Reviews</h2>
        <div class="reviews_grid_738kx">
            <div class="review_card_923mx">
                <div class="review_stars_847vh">★★★★★</div>
                <p class="review_text_594kx">"Outstanding quality and service! I've been shopping at VistaroHub for two years now, and every piece I've purchased has exceeded my expectations. The fit is perfect, and the materials are top-notch."</p>
                <p class="review_author_738mx">- Michael Johnson, Marketing Director</p>
            </div>
            <div class="review_card_923mx">
                <div class="review_stars_847vh">★★★★★</div>
                <p class="review_text_594kx">"The personal styling service is incredible. Sarah helped me completely revamp my wardrobe, and I've never felt more confident in my clothing choices. Highly recommend!"</p>
                <p class="review_author_738mx">- Robert Kim, Software Engineer</p>
            </div>
            <div class="review_card_923mx">
                <div class="review_stars_847vh">★★★★★</div>
                <p class="review_text_594kx">"Fast shipping, easy returns, and excellent customer service. The quality of their casual wear is unmatched. I'm a customer for life!"</p>
                <p class="review_author_738mx">- Daniel Martinez, Teacher</p>
            </div>
            <div class="review_card_923mx">
                <div class="review_stars_847vh">★★★★★</div>
                <p class="review_text_594kx">"Love the sustainable fashion options. It's great to find a company that cares about the environment while still delivering amazing style and quality."</p>
                <p class="review_author_738mx">- Alex Thompson, Environmental Consultant</p>
            </div>
            <div class="review_card_923mx">
                <div class="review_stars_847vh">★★★★★</div>
                <p class="review_text_594kx">"The attention to detail is remarkable. Every stitch, every button, every seam is perfect. You can tell they really care about craftsmanship."</p>
                <p class="review_author_738mx">- Christopher Lee, Architect</p>
            </div>
            <div class="review_card_923mx">
                <div class="review_stars_847vh">★★★★★</div>
                <p class="review_text_594kx">"Great value for money. The clothes look and feel expensive but are reasonably priced. The fit is consistently excellent across all their pieces."</p>
                <p class="review_author_738mx">- Steven Wilson, Financial Advisor</p>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter_section_847mx">
        <h2>Stay Updated</h2>
        <p>Subscribe to our newsletter for style tips, new arrivals, and exclusive offers</p>
        <div class="newsletter_form_594vh">
            <input type="email" placeholder="Enter your email address" class="newsletter_input_738kx">
            <button class="newsletter_button_923mx">Subscribe</button>
        </div>
    </section>

    <!-- Additional Content Sections for SEO and Content Richness -->
    <section class="section_container_847vh">
        <h2 class="section_title_923kx">Fabric Care & Maintenance</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                <h3>Cotton Care</h3>
                <p>Our cotton pieces are pre-shrunk and colorfast. Machine wash in cold water and tumble dry on low heat. Iron while slightly damp for best results.</p>
            </div>
            <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                <h3>Wool Maintenance</h3>
                <p>Wool items should be dry cleaned or hand washed in cool water with wool-specific detergent. Lay flat to dry and store with cedar blocks.</p>
            </div>
            <div style="background: white; padding: 2rem; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                <h3>Denim Care</h3>
                <p>Wash jeans inside out in cold water to preserve color and fit. Air dry when possible, and avoid over-washing to maintain the fabric's integrity.</p>
            </div>
        </div>
    </section>

    <section style="background: #f8f9fa; padding: 4rem 2rem;">
        <div class="section_container_847vh">
            <h2 class="section_title_923kx">Size Guide & Fit Information</h2>
            <div style="background: white; padding: 3rem; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                <h3>Finding Your Perfect Fit</h3>
                <p style="margin-bottom: 2rem;">At VistaroHub, we understand that proper fit is crucial for both comfort and style. Our sizing runs true to standard measurements, but we recommend checking our detailed size charts for each category.</p>
                
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; margin-top: 2rem;">
                    <div>
                        <h4>Shirts & Tops</h4>
                        <p>Measured across chest, shoulder width, and sleeve length. Our shirts are cut for a modern fit - not too tight, not too loose.</p>
                    </div>
                    <div>
                        <h4>Pants & Jeans</h4>
                        <p>Waist, inseam, and rise measurements ensure the perfect fit. Most styles available in regular and long lengths.</p>
                    </div>
                    <div>
                        <h4>Outerwear</h4>
                        <p>Designed to layer comfortably over other clothing while maintaining a tailored silhouette.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section_container_847vh">
        <h2 class="section_title_923kx">Seasonal Collections</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            <div style="background: linear-gradient(135deg, #3498db, #2980b9); color: white; padding: 2rem; border-radius: 10px;">
                <h3>Spring Collection</h3>
                <p>Light fabrics, fresh colors, and versatile pieces perfect for transitional weather. Featuring breathable cotton blends and lightweight layers.</p>
            </div>
            <div style="background: linear-gradient(135deg, #e74c3c, #c0392b); color: white; padding: 2rem; border-radius: 10px;">
                <h3>Summer Essentials</h3>
                <p>Stay cool and stylish with our summer lineup. Moisture-wicking fabrics, UV protection, and comfortable fits for warm weather activities.</p>
            </div>
            <div style="background: linear-gradient(135deg, #f39c12, #e67e22); color: white; padding: 2rem; border-radius: 10px;">
                <h3>Fall Favorites</h3>
                <p>Rich textures and warm tones define our autumn collection. Perfect layering pieces and transitional outerwear for changing temperatures.</p>
            </div>
            <div style="background: linear-gradient(135deg, #34495e, #2c3e50); color: white; padding: 2rem; border-radius: 10px;">
                <h3>Winter Warmth</h3>
                <p>Insulated outerwear, cozy knitwear, and cold-weather accessories. Stay warm without sacrificing style during the coldest months.</p>
            </div>
        </div>
    </section>

    <!-- Continue Section 4 -->
    <section class="continue_section_923vh">
        <h3>Ready to Get Started?</h3>
        <p>Contact our team today and discover the VistaroHub difference</p>
        <button class="continue_button_847kx" onclick="document.getElementById('contact').scrollIntoView()">Click Here to Continue</button>
    </section>

    <!-- Footer -->
    <footer id="contact" class="footer_container_738vh">
        <div class="footer_grid_923kx">
            <div class="footer_section_847mx">
                <h3 class="footer_title_594vh">Contact Information</h3>
                <p>📍 2847 Fashion Boulevard<br>Style District, CA 90210</p>
                <p>📧 info@vistarohub.com</p>
                <p>📞 <a href="tel:+15551234567" class="phone_link_923mx">+1 (555) 123-4567</a></p>
                <p>🕒 Mon-Sat: 10AM-8PM<br>Sunday: 12PM-6PM</p>
            </div>
            <div class="footer_section_847mx">
                <h3 class="footer_title_594vh">Quick Links</h3>
                <a href="#home" class="footer_link_738kx">Home</a>
                <a href="#about" class="footer_link_738kx">About Us</a>
                <a href="#products" class="footer_link_738kx">Collections</a>
                <a href="#services" class="footer_link_738kx">Services</a>
                <a href="#reviews" class="footer_link_738kx">Reviews</a>
            </div>
            <div class="footer_section_847mx">
                <h3 class="footer_title_594vh">Customer Service</h3>
                <a href="#" class="footer_link_738kx">Size Guide</a>
                <a href="#" class="footer_link_738kx">Shipping Info</a>
                <a href="#" class="footer_link_738kx">Returns & Exchanges</a>
                <a href="#" class="footer_link_738kx">Care Instructions</a>
                <a href="#" class="footer_link_738kx">FAQ</a>
            </div>
            <div class="footer_section_847mx">
                <h3 class="footer_title_594vh">Follow Us</h3>
                <a href="#" class="footer_link_738kx">Facebook</a>
                <a href="#" class="footer_link_738kx">Instagram</a>
                <a href="#" class="footer_link_738kx">Twitter</a>
                <a href="#" class="footer_link_738kx">Pinterest</a>
                <a href="#" class="footer_link_738kx">YouTube</a>
            </div>
        </div>
        <div style="text-align: center; padding-top: 2rem; border-top: 1px solid #34495e; margin-top: 2rem;">
            <p>© 2023 VistaroHub. All rights reserved. | <a href="#" onclick="showPrivacyPolicy()" class="footer_link_738kx">Privacy Policy</a> | <a href="#" onclick="showTermsOfService()" class="footer_link_738kx">Terms of Service</a></p>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacyModal" class="modal_overlay_847vh">
        <div class="modal_content_594kx">
            <span class="modal_close_738mx" onclick="closeModal('privacyModal')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Effective Date:</strong> January 1, 2023</p>
            
            <h3>Information We Collect</h3>
            <p>At VistaroHub, we collect information you provide directly to us, such as when you create an account, make a purchase, or contact us for support. This may include your name, email address, phone number, shipping address, and payment information.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to process orders, provide customer service, send marketing communications (with your consent), and improve our services. We may also use your information to personalize your shopping experience and recommend products that might interest you.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or rent your personal information to third parties. We may share your information with trusted service providers who assist us in operating our website and conducting business, provided they agree to keep this information confidential.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
            
            <h3>Your Rights</h3>
            <p>You have the right to access, update, or delete your personal information. You may also opt out of marketing communications at any time by following the unsubscribe instructions in our emails.</p>
            
            <h3>Cookies</h3>
            <p>Our website uses cookies to enhance your browsing experience. You can choose to disable cookies through your browser settings, though this may affect some functionality of our site.</p>
            
            <h3>Contact Us</h3>
            <p>If you have any questions about this Privacy Policy, please contact us at privacy@vistarohub.com or call <a href="tel:+15551234567">+1 (555) 123-4567</a>.</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="termsModal" class="modal_overlay_847vh">
        <div class="modal_content_594kx">
            <span class="modal_close_738mx" onclick="closeModal('termsModal')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Effective Date:</strong> January 1, 2023</p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using the VistaroHub website, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>
            
            <h3>Products and Services</h3>
            <p>VistaroHub provides men's clothing and related accessories through our online platform. All products are subject to availability, and we reserve the right to discontinue any product at any time.</p>
            
            <h3>Ordering and Payment</h3>
            <p>When you place an order, you agree to provide accurate and complete information. All orders are subject to acceptance and availability. We accept major credit cards and other payment methods as displayed on our website.</p>
            
            <h3>Shipping and Delivery</h3>
            <p>We will make every effort to deliver products within the estimated timeframe. However, delivery times are estimates and not guaranteed. Risk of loss and title for products pass to you upon delivery to the carrier.</p>
            
            <h3>Returns and Exchanges</h3>
            <p>We accept returns within 30 days of purchase for unworn items in original condition with tags attached. Custom or altered items cannot be returned. Return shipping costs are the responsibility of the customer unless the item was defective.</p>
            
            <h3>Intellectual Property</h3>
            <p>All content on this website, including text, graphics, logos, and images, is the property of VistaroHub and is protected by copyright and trademark laws.</p>
            
            <h3>Limitation of Liability</h3>
            <p>VistaroHub shall not be liable for any indirect, incidental, special, or consequential damages arising from the use of our products or services.</p>
            
            <h3>Governing Law</h3>
            <p>These terms shall be governed by and construed in accordance with the laws of California, without regard to its conflict of law provisions.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these Terms of Service, contact us at legal@vistarohub.com or call <a href="tel:+15551234567">+1 (555) 123-4567</a>.</p>
        </div>
    </div>

    <script>
        // Modal functionality
        function showPrivacyPolicy() {
            document.getElementById('privacyModal').style.display = 'block';
        }

        function showTermsOfService() {
            document.getElementById('termsModal').style.display = 'block';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const privacyModal = document.getElementById('privacyModal');
            const termsModal = document.getElementById('termsModal');
            if (event.target == privacyModal) {
                privacyModal.style.display = 'none';
            }
            if (event.target == termsModal) {
                termsModal.style.display = 'none';
            }
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Newsletter subscription
        document.querySelector('.newsletter_button_923mx').addEventListener('click', function() {
            const email = document.querySelector('.newsletter_input_738kx').value;
            if (email) {
                alert('Thank you for subscribing to our newsletter!');
                document.querySelector('.newsletter_input_738kx').value = '';
            } else {
                alert('Please enter a valid email address.');
            }
        });

        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to product cards
            const productCards = document.querySelectorAll('.product_card_847vh');
            productCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(-5px)';
                });
            });
        });
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>



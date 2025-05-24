<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOW Events- Organisation d'Événements</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="./assets/logo_nobg.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    <?php if (isset($_GET['success'])): ?>
    <div class="static-toast toast-success">Merci pour votre message! Nous vous contacterons bientôt.</div>
    <?php endif; ?>
    
    <div class="balloon-container"></div>
    <div class="language-switcher">
        <button onclick="switchLanguage('fr')" class="lang-btn active" data-lang="fr">Français</button>
        <button onclick="switchLanguage('darija')" class="lang-btn" data-lang="darija">الدارجة</button>
    </div>
    <nav>
        <img src="./assets/logo_nobg.png" class="logo-img" alt="logo.jpg">
        <div class="nav-links">
            <a href="#home" data-fr="Accueil" data-darija="الرئيسية">Accueil</a>
            <a href="#services" data-fr="Services" data-darija="خدمات">Services</a>
            <a href="#portfolio" data-fr="Portfolio" data-darija="أعمالنا">Portfolio</a>
            <a href="#about" data-fr="À Propos" data-darija="معلومات علينا">À Propos</a>
            <a href="#contact" data-fr="Contact" data-darija="اتصل بنا">Contact</a>
            <a href="#book" class="book-btn" data-fr="Réserver" data-darija="احجز دابا">Réserver</a>
        </div>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <section id="home" class="hero">
        <video autoplay muted loop id="heroVideo">
            <source src="./assets/hero.mp4" type="video/mp4">
        </video>
        <div class="hero-content">
            <h1 data-fr="Créons des Moments Inoubliables" data-darija="نخلقو لحظات ما تتنساش">Créons des Moments Inoubliables</h1>
            <p data-fr="Organisation d'Événements de Premier Choix au Maroc" data-darija="تنظيم الحفلات الراقية في المغرب">Organisation d'Événements de Premier Choix au Maroc</p>
            <a href="#book" class="cta-btn" data-fr="Planifiez Votre Événement" data-darija="خطط لحفلتك">Planifiez Votre Événement</a>
        </div>
    </section>

    <section id="services" class="services">
        <h2 data-fr="Nos Services" data-darija="خدماتنا">Nos Services</h2>
        <div class="services-grid">
            <div class="service-card">
                <i class="fas fa-glass-cheers"></i>
                <h3 data-fr="Mariages" data-darija="عراسات">Mariages</h3>
                <p data-fr="Rendez votre jour spécial vraiment magique" data-darija="نخليو نهار عرسك ساحر">Rendez votre jour spécial vraiment magique</p>
            </div>
            <div class="service-card">
                <i class="fas fa-birthday-cake"></i>
                <h3 data-fr="Anniversaires" data-darija="عيد الميلاد">Anniversaires</h3>
                <p data-fr="Célébrez vos moments importants avec style" data-darija="احتفل بلحظاتك المهمة بأناقة">Célébrez vos moments importants avec style</p>
            </div>
            <div class="service-card">
                <i class="fas fa-briefcase"></i>
                <h3 data-fr="Événements Professionnels" data-darija="مناسبات مهنية">Événements Professionnels</h3>
                <p data-fr="Des événements professionnels qui marquent" data-darija="حفلات احترافية كتخلي أثر">Des événements professionnels qui marquent</p>
            </div>
            <div class="service-card">
                <i class="fas fa-music"></i>
                <h3 data-fr="Festivals" data-darija="مهرجانات">Festivals</h3>
                <p data-fr="Événements de divertissement à grande échelle" data-darija="حفلات كبيرة ومميزة">Événements de divertissement à grande échelle</p>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <h2 data-fr="Notre Portfolio" data-darija="أعمالنا">Notre Portfolio</h2>
        <div class="portfolio-grid">
            <div class="portfolio-item">
                <img src="./assets/image6.jpeg" alt="Event Setup">
                <div class="overlay">
                    <h3 data-fr="Organisation d'Événements" data-darija="تنظيم المناسبات">Organisation d'Événements</h3>
                    <p data-fr="Casablanca, 2024" data-darija="الدار البيضاء، 2024">Casablanca, 2024</p>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="./assets/image4.jpeg" alt="Character Entertainment">
                <div class="overlay">
                    <h3 data-fr="Animation Personnages" data-darija="شخصيات كرتونية">Animation Personnages</h3>
                    <p data-fr="Marrakech, 2024" data-darija="مراكش، 2024">Marrakech, 2024</p>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="./assets/image3.jpeg" alt="Outdoor Events">
                <div class="overlay">
                    <h3 data-fr="Événements en Plein Air" data-darija="مناسبات خارجية">Événements en Plein Air</h3>
                    <p data-fr="Rabat, 2024" data-darija="الرباط، 2024">Rabat, 2024</p>
                </div>
            </div>
            <!-- <div class="portfolio-item">
                <img src="./assets/image5.jpeg" alt="Character Meet">
                <div class="overlay">
                    <h3 data-fr="Rencontres Personnages" data-darija="لقاء الشخصيات">Rencontres Personnages</h3>
                    <p data-fr="Tanger, 2024" data-darija="طنجة، 2024">Tanger, 2024</p>
                </div>
            </div> -->
        </div>
    </section>
    <section id="about" class="about">
        <h2 data-fr="À Propos de WOW Events" data-darija="معلومات علينا">À Propos de WOW Events</h2>
        <div class="about-content">
            <div class="about-image">
                <img src="./assets/image1.jpeg" alt="Character Entertainment" class="about-character">
                <img src="./assets/image2.jpeg" alt="Mascot Entertainment" class="about-mascot">
            </div>
            <div class="about-text">
                <p data-fr="Depuis notre création, WOW Events a créé des expériences extraordinaires à travers le Maroc. Notre passion pour la perfection et notre attention aux détails nous distinguent dans l'industrie de l'organisation d'événements." data-darija="منذ إنشائنا، قمنا بإنشاء تجارب استثنائية في جميع أنحاء المغرب. إن شغفنا بالكمال واهتمامنا بالتفاصيل يجعلهما يبرزان في صناعة تنظيم الفعاليات.">Depuis notre création, WOW Events a créé des expériences extraordinaires à travers le Maroc. Notre passion pour la perfection et notre attention aux détails nous distinguent dans l'industrie de l'organisation d'événements.</p>
                <ul class="achievements">
                    <li><span>500+</span> Événements Organisés</li>
                    <li><span>50+</span> Clients Entreprises</li>
                    <li><span>100%</span> Satisfaction Client</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="book" class="book">
        <h2 data-fr="Réservez Votre Événement" data-darija="احجز حدثك">
            Réservez Votre Événement
        </h2>

        <!-- action vers notre script PHP -->
        <form id="bookingForm" action="process_booking.php" method="POST">
            <div class="form-group">
                <input type="text" name="name" required placeholder="Votre Nom">
            </div>
            <div class="form-group">
                <input type="email" name="email" required placeholder="Votre Email">
            </div>
            <div class="form-group">
                <input type="tel" name="phone" required placeholder="Numéro de Téléphone">
            </div>
            <div class="form-group">
                <select name="eventType" required>
                    <option value="">Sélectionnez le Type d'Événement</option>
                    <option value="Mariage">Mariage</option>
                    <option value="Événement Entreprise">Événement Entreprise</option>
                    <option value="Anniversaire">Anniversaire</option>
                    <option value="Anniversaire de Mariage">Anniversaire de Mariage</option>
                    <option value="Autre">Autre</option>
                </select>
            </div>
            <div class="form-group">
                <textarea name="message" required placeholder="Dites-nous à propos de votre événement"></textarea>
            </div>
            <button type="submit" class="submit-btn">Envoyer la Demande</button>
        </form>

        <?php if (isset($_GET['ok'])): ?>
            <p class="success">Merci ! Votre demande a bien été envoyée.</p>
        <?php endif; ?>
    </section>

    <section id="contact" class="contact">
        <h2 data-fr="Contactez-Nous" data-darija="اتصل بنا">Contactez-Nous</h2>
        <div class="contact-info">
            <div class="contact-card">
                <i class="fas fa-map-marker-alt"></i>
                <p>Casablanca, Maroc</p>
            </div>
            <div class="contact-card">
                <i class="fas fa-phone"></i>
                <p>+212690-227638</p>
            </div>
            <div class="contact-card">
                <i class="fas fa-envelope"></i>
                <p>contact@woweventsofficial.com</p>
            </div>
        </div>
        <div class="social-links">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <p>&copy; 2025 WOW Events Maroc. Tous droits réservés.</p>
            <p class="creator">Créé avec ❤️ par <a target="_blank" rel="noopener noreferrer" class="creator-link" href="https://wadie-bch.com">wadie-bch.com</a></p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>

</html>
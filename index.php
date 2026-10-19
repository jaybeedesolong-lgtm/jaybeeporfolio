<?php
$name = 'Jaybee Desolong';
$firstName = 'Jaybee';
$email = 'jaybeedesolong@gmail.com';
$year = date('Y');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#0d1117">
  <meta name="description" content="Web developer portfolio of Jaybee Desolong. Explore his HTML, CSS, JavaScript, and PHP skills and connect online.">
  <title><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?> | Web Developer Portfolio</title>
  <style>
    :root {
      color-scheme: light;
      --ink: #182520;
      --muted: #64716a;
      --paper: #f6f5f1;
      --green: #285c48;
      --lime: #d7ef78;
      --line: #dedfd6;
    }

    * {
      box-sizing: border-box;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      margin: 0;
      background: var(--paper);
      color: var(--ink);
      font-family: "Segoe UI", Arial, sans-serif;
      -webkit-font-smoothing: antialiased;
    }

    a {
      color: inherit;
    }

    .page-shell {
      width: min(1120px, calc(100% - 48px));
      margin: 0 auto;
    }

    .site-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      min-height: 86px;
      border-bottom: 1px solid var(--line);
    }

    .brand {
      font-size: 15px;
      font-weight: 750;
      letter-spacing: -0.04em;
      text-decoration: none;
    }

    .brand span {
      color: var(--green);
    }

    .nav-link {
      color: var(--muted);
      font-size: 14px;
      text-decoration: none;
      transition: color 160ms ease;
    }

    .nav-link:hover,
    .nav-link:focus-visible {
      color: var(--green);
    }

    .hero {
      display: grid;
      grid-template-columns: 1.35fr 0.65fr;
      align-items: center;
      gap: 64px;
      min-height: 590px;
      padding: 80px 0;
    }

    .eyebrow {
      display: flex;
      align-items: center;
      gap: 10px;
      margin: 0 0 24px;
      color: var(--green);
      font-size: 12px;
      font-weight: 750;
      letter-spacing: 0.15em;
      text-transform: uppercase;
    }

    .eyebrow::before {
      width: 24px;
      height: 2px;
      background: var(--green);
      content: "";
    }

    h1 {
      max-width: 700px;
      margin: 0;
      font-size: clamp(56px, 9vw, 104px);
      font-weight: 650;
      letter-spacing: -0.085em;
      line-height: 0.96;
    }

    h1 span {
      color: var(--green);
    }

    .hero-copy {
      max-width: 445px;
      margin: 28px 0 0;
      color: var(--muted);
      font-size: 17px;
      line-height: 1.8;
    }

    .hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      margin-top: 34px;
    }

    .button {
      display: inline-flex;
      min-height: 48px;
      align-items: center;
      justify-content: center;
      gap: 10px;
      padding: 0 20px;
      border: 1px solid var(--green);
      border-radius: 999px;
      background: var(--green);
      color: white;
      font-size: 14px;
      font-weight: 650;
      text-decoration: none;
      transition: transform 160ms ease, background 160ms ease;
    }

    .button:hover {
      transform: translateY(-2px);
      background: #1f4939;
    }

    .button.secondary {
      background: transparent;
      color: var(--green);
    }

    .button.secondary:hover {
      background: #e9eee6;
    }

    .button svg {
      width: 17px;
      height: 17px;
      fill: currentColor;
    }

    .portrait-card {
      position: relative;
      display: grid;
      min-height: 350px;
      place-items: center;
      overflow: hidden;
      border-radius: 48% 48% 28px 28px;
      background: var(--lime);
    }

    .portrait-card::before,
    .portrait-card::after {
      position: absolute;
      border: 1px solid rgb(24 37 32 / 13%);
      border-radius: 50%;
      content: "";
    }

    .portrait-card::before {
      width: 250px;
      height: 250px;
    }

    .portrait-card::after {
      width: 310px;
      height: 310px;
    }

    .monogram {
      z-index: 1;
      color: var(--green);
      font-size: clamp(96px, 13vw, 150px);
      font-weight: 700;
      letter-spacing: -0.12em;
      line-height: 1;
      padding-right: 0.12em;
    }

    .portrait-caption {
      position: absolute;
      right: 18px;
      bottom: 18px;
      left: 18px;
      z-index: 2;
      padding: 12px 16px;
      border: 1px solid rgb(24 37 32 / 10%);
      border-radius: 999px;
      background: rgb(246 245 241 / 88%);
      color: var(--ink);
      font-size: 12px;
      text-align: center;
    }

    .about {
      display: grid;
      grid-template-columns: 0.7fr 1.3fr;
      gap: 48px;
      padding: 76px 0 88px;
      border-top: 1px solid var(--line);
    }

    .section-label {
      margin: 7px 0 0;
      color: var(--green);
      font-size: 12px;
      font-weight: 750;
      letter-spacing: 0.15em;
      text-transform: uppercase;
    }

    .about h2 {
      max-width: 620px;
      margin: 0;
      font-size: clamp(30px, 4vw, 44px);
      font-weight: 600;
      letter-spacing: -0.06em;
      line-height: 1.15;
    }

    .about p {
      max-width: 610px;
      margin: 20px 0 0;
      color: var(--muted);
      font-size: 16px;
      line-height: 1.85;
    }

    .skills {
      padding: 0 0 88px;
    }

    .skills-heading {
      display: flex;
      align-items: baseline;
      justify-content: space-between;
      gap: 20px;
      margin-bottom: 24px;
    }

    .skills-heading h2 {
      margin: 0;
      font-size: clamp(30px, 4vw, 44px);
      font-weight: 600;
      letter-spacing: -0.06em;
    }

    .skills-grid {
      display: grid;
      grid-template-columns: repeat(4, minmax(0, 1fr));
      gap: 12px;
    }

    .skill-card {
      min-height: 130px;
      padding: 20px;
      border: 1px solid var(--line);
      border-radius: 18px;
      background: #fbfaf7;
    }

    .skill-number {
      display: block;
      margin-bottom: 24px;
      color: var(--green);
      font-size: 12px;
      font-weight: 750;
      letter-spacing: 0.1em;
    }

    .skill-card h3 {
      margin: 0;
      font-size: 16px;
      font-weight: 650;
      line-height: 1.4;
    }

    .contact {
      display: grid;
      grid-template-columns: 0.7fr 1.3fr;
      gap: 48px;
      padding: 76px 0 88px;
      border-top: 1px solid var(--line);
    }

    .contact-content h2 {
      margin: 0;
      font-size: clamp(30px, 4vw, 44px);
      font-weight: 600;
      letter-spacing: -0.06em;
    }

    .contact-content > p {
      margin: 14px 0 24px;
      color: var(--muted);
      line-height: 1.75;
    }

    .contact-form {
      display: grid;
      gap: 14px;
    }

    .contact-form label {
      display: grid;
      gap: 7px;
      font-size: 14px;
      font-weight: 600;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 12px 14px;
      border: 1px solid var(--line);
      border-radius: 12px;
      background: #fbfaf7;
      color: var(--ink);
      font: inherit;
    }

    .contact-form textarea {
      min-height: 130px;
      resize: vertical;
    }

    .contact-form .button {
      justify-self: start;
      cursor: pointer;
    }

    .site-footer {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      min-height: 82px;
      border-top: 1px solid var(--line);
      color: var(--muted);
      font-size: 13px;
    }

    .footer-name {
      color: var(--ink);
      font-weight: 650;
    }

    @media (max-width: 760px) {
      .page-shell {
        width: min(100% - 36px, 560px);
      }

      .site-header {
        min-height: 70px;
      }

      .hero {
        grid-template-columns: 1fr;
        gap: 48px;
        min-height: auto;
        padding: 76px 0 64px;
      }

      .hero-copy {
        font-size: 16px;
      }

      .portrait-card {
        min-height: 290px;
      }

      .about {
        grid-template-columns: 1fr;
        gap: 18px;
        padding: 56px 0 64px;
      }

      .contact {
        grid-template-columns: 1fr;
        gap: 18px;
        padding: 56px 0 64px;
      }

      .skills {
        padding-bottom: 64px;
      }

      .skills-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
      }
    }

    @media (max-width: 420px) {
      .site-footer {
        align-items: flex-start;
        flex-direction: column;
        justify-content: center;
        gap: 8px;
        padding: 18px 0;
      }

      .button {
        padding: 0 16px;
      }
    }

    @media (prefers-reduced-motion: reduce) {
      html {
        scroll-behavior: auto;
      }

      *,
      *::before,
      *::after {
        transition-duration: 0.01ms !important;
      }
    }

    :root {
      --ink: #1b2922;
      --muted: #69766d;
      --paper: #f8f7f2;
      --green: #315b45;
      --lime: #e6edcf;
      --line: #e5e5dc;
      --clay: #ba7657;
    }

    body {
      background:
        radial-gradient(ellipse at 88% 8%, rgb(230 237 207 / 58%), transparent 27rem),
        var(--paper);
    }

    .page-shell {
      width: min(1160px, calc(100% - 64px));
    }

    .site-header {
      position: sticky;
      top: 0;
      z-index: 5;
      min-height: 82px;
      border-bottom-color: rgb(229 229 220 / 80%);
      background: rgb(248 247 242 / 88%);
      backdrop-filter: blur(16px);
    }

    .brand {
      font-size: 16px;
      letter-spacing: -0.06em;
    }

    .brand span {
      color: var(--clay);
    }

    .site-header nav {
      display: flex;
      align-items: center;
      gap: 30px;
    }

    .nav-link {
      position: relative;
      padding: 10px 0;
      color: var(--muted);
      font-size: 13px;
      font-weight: 600;
    }

    .nav-link::after {
      position: absolute;
      right: 0;
      bottom: 3px;
      left: 0;
      height: 1px;
      transform: scaleX(0);
      transform-origin: left;
      background: var(--green);
      content: "";
      transition: transform 180ms ease;
    }

    .nav-link:hover::after,
    .nav-link:focus-visible::after {
      transform: scaleX(1);
    }

    .hero {
      min-height: 650px;
      gap: 8%;
      padding: 92px 0 100px;
    }

    .eyebrow {
      width: fit-content;
      gap: 9px;
      margin-bottom: 28px;
      padding: 9px 13px;
      border: 1px solid var(--line);
      border-radius: 999px;
      background: rgb(255 255 255 / 60%);
      color: var(--green);
      font-size: 10px;
      letter-spacing: 0.13em;
    }

    .eyebrow::before {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: var(--clay);
    }

    h1 {
      font-size: clamp(64px, 9.3vw, 112px);
      font-weight: 620;
      letter-spacing: -0.095em;
      line-height: 0.91;
    }

    h1 span {
      color: var(--green);
    }

    .hero-copy {
      max-width: 410px;
      margin-top: 26px;
      font-size: 16px;
      line-height: 1.9;
    }

    .hero-actions {
      gap: 10px;
      margin-top: 30px;
    }

    .button {
      min-height: 46px;
      padding: 0 18px;
      border-color: var(--green);
      background: var(--green);
      font-size: 13px;
      box-shadow: 0 8px 20px rgb(49 91 69 / 12%);
    }

    .button:hover {
      transform: translateY(-3px);
      background: #264a37;
      box-shadow: 0 12px 24px rgb(49 91 69 / 18%);
    }

    .button.secondary {
      border-color: var(--line);
      background: transparent;
      color: var(--ink);
      box-shadow: none;
    }

    .button.secondary:hover {
      border-color: var(--green);
      background: #eef0e8;
      color: var(--green);
    }

    .portrait-card {
      min-height: 420px;
      border: 1px solid rgb(49 91 69 / 10%);
      border-radius: 48% 48% 30px 30px;
      background:
        radial-gradient(circle at 50% 42%, rgb(255 255 255 / 64%), transparent 34%),
        linear-gradient(155deg, #eaf0d5, #d9e4bd);
      box-shadow: 0 24px 70px rgb(49 91 69 / 9%);
    }

    .portrait-card::before,
    .portrait-card::after {
      border-color: rgb(49 91 69 / 12%);
    }

    .portrait-card::before {
      width: 280px;
      height: 280px;
    }

    .portrait-card::after {
      width: 350px;
      height: 350px;
    }

    .monogram {
      color: var(--green);
      font-size: clamp(112px, 15vw, 176px);
      font-weight: 600;
      letter-spacing: -0.14em;
      text-shadow: 0 10px 35px rgb(49 91 69 / 10%);
    }

    .portrait-caption {
      right: 20px;
      bottom: 20px;
      left: 20px;
      padding: 14px 18px;
      border-color: rgb(255 255 255 / 70%);
      background: rgb(248 247 242 / 82%);
      color: var(--muted);
      font-size: 11px;
      letter-spacing: 0.02em;
      backdrop-filter: blur(12px);
    }

    .about,
    .contact {
      gap: 56px;
      padding: 82px 0 92px;
      border-top-color: var(--line);
    }

    .section-label {
      color: var(--clay);
      font-size: 10px;
      letter-spacing: 0.14em;
    }

    .about h2,
    .skills-heading h2,
    .contact-content h2 {
      font-size: clamp(34px, 4.2vw, 48px);
      font-weight: 580;
      letter-spacing: -0.075em;
    }

    .about p {
      margin-top: 22px;
      font-size: 15px;
      line-height: 1.95;
    }

    .skills {
      padding-bottom: 92px;
    }

    .skills-heading {
      align-items: center;
      margin-bottom: 26px;
    }

    .skills-grid {
      gap: 14px;
    }

    .skill-card {
      min-height: 248px;
      padding: 16px 16px 20px;
      border-color: var(--line);
      border-radius: 20px;
      background: rgb(255 255 255 / 55%);
      transition: transform 180ms ease, border-color 180ms ease, box-shadow 180ms ease;
    }

    .skill-card:hover {
      transform: translateY(-4px);
      border-color: rgb(49 91 69 / 30%);
      box-shadow: 0 16px 34px rgb(27 41 34 / 7%);
    }

    .skill-visual {
      position: relative;
      height: 128px;
      margin-bottom: 18px;
      overflow: hidden;
      border: 1px solid rgb(49 91 69 / 8%);
      border-radius: 14px;
      background: linear-gradient(135deg, #f4f2ea, #ece8df);
    }

    .skill-visual::before,
    .skill-visual::after {
      position: absolute;
      content: "";
    }

    .skill-visual--html {
      background: linear-gradient(135deg, #f4efe7, #efe5db);
    }

    .skill-visual--html::before {
      top: 24px;
      left: 50%;
      width: 92px;
      height: 62px;
      transform: translateX(-50%);
      border: 2px solid rgba(49, 91, 69, 0.65);
      border-radius: 12px;
      background: rgba(255, 255, 255, 0.4);
      box-shadow: inset 0 0 0 10px rgba(49, 91, 69, 0.07);
    }

    .skill-visual--html::after {
      right: 30px;
      bottom: 24px;
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: #d7783e;
      box-shadow: -18px 0 0 0 #d7783e, -36px 0 0 0 #d7783e;
    }

    .skill-visual--css {
      background: linear-gradient(135deg, #eef4ea, #e7efe2);
    }

    .skill-visual--css::before {
      top: 30px;
      left: 50%;
      width: 110px;
      height: 50px;
      transform: translateX(-50%);
      border-radius: 12px;
      background: linear-gradient(90deg, rgba(49, 91, 69, 0.12), rgba(49, 91, 69, 0.02));
      box-shadow: inset 0 0 0 2px rgba(49, 91, 69, 0.18);
    }

    .skill-visual--css::after {
      left: 50%;
      bottom: 26px;
      width: 80px;
      height: 18px;
      transform: translateX(-50%);
      border-radius: 999px;
      background: rgba(49, 91, 69, 0.12);
      box-shadow: 0 -32px 0 -8px rgba(49, 91, 69, 0.15), 0 -64px 0 -14px rgba(49, 91, 69, 0.1);
    }

    .skill-visual--javascript {
      background: linear-gradient(135deg, #f1f0ef, #e9e5df);
    }

    .skill-visual--javascript::before {
      top: 50%;
      left: 50%;
      width: 100px;
      height: 100px;
      transform: translate(-50%, -50%);
      border: 2px solid rgba(49, 91, 69, 0.2);
      border-radius: 50%;
    }

    .skill-visual--javascript::after {
      inset: 0;
      background: radial-gradient(circle at center, transparent 0 20%, rgba(49, 91, 69, 0.12) 20.5% 21%, transparent 21.5% 100%);
      background-size: 60px 60px;
      opacity: 0.7;
    }

    .skill-visual--php {
      background: linear-gradient(135deg, #f4efe4, #e8ebdf);
    }

    .skill-visual--php::before {
      left: 50%;
      top: 28px;
      width: 76px;
      height: 52px;
      transform: translateX(-50%);
      border: 2px solid rgba(49, 91, 69, 0.62);
      border-radius: 18px 18px 18px 10px;
      background: rgba(255, 255, 255, 0.35);
    }

    .skill-visual--php::after {
      left: 50%;
      bottom: 24px;
      width: 40px;
      height: 18px;
      transform: translateX(-50%);
      border-radius: 999px;
      background: rgba(49, 91, 69, 0.14);
      box-shadow: -42px 0 0 0 rgba(49, 91, 69, 0.08), 42px 0 0 0 rgba(49, 91, 69, 0.08);
    }

    .skill-number {
      margin-bottom: 10px;
      color: var(--clay);
      font-size: 10px;
    }

    .skill-card h3 {
      font-size: 15px;
      letter-spacing: -0.02em;
    }

    .contact {
      align-items: start;
    }

    .contact-content {
      padding: 30px;
      border: 1px solid var(--line);
      border-radius: 24px;
      background: rgb(255 255 255 / 58%);
    }

    .contact-content > p {
      margin-top: 12px;
      font-size: 14px;
    }

    .contact-form {
      gap: 16px;
      margin-top: 26px;
    }

    .contact-form label {
      gap: 8px;
      color: var(--ink);
      font-size: 12px;
      font-weight: 650;
    }

    .contact-form input,
    .contact-form textarea {
      padding: 13px 15px;
      border-color: var(--line);
      border-radius: 12px;
      background: #fbfbf8;
      font-size: 14px;
      transition: border-color 160ms ease, box-shadow 160ms ease;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
      outline: none;
      border-color: var(--green);
      box-shadow: 0 0 0 3px rgb(49 91 69 / 10%);
    }

    .contact-form textarea {
      min-height: 145px;
    }

    .site-footer {
      min-height: 88px;
      border-top-color: var(--line);
      font-size: 12px;
    }

    .footer-name {
      color: var(--green);
    }

    @media (max-width: 760px) {
      .page-shell {
        width: min(100% - 36px, 560px);
      }

      .site-header {
        min-height: 70px;
      }

      .site-header nav {
        gap: 18px;
      }

      .nav-link {
        font-size: 12px;
      }

      .hero {
        gap: 44px;
        padding: 68px 0 70px;
      }

      .portrait-card {
        min-height: 320px;
      }

      .about,
      .contact {
        gap: 20px;
        padding: 60px 0 68px;
      }

      .skills {
        padding-bottom: 68px;
      }

      .contact-content {
        padding: 24px;
      }
    }

    @media (max-width: 420px) {
      .site-header nav {
        gap: 12px;
      }

      .nav-link {
        font-size: 11px;
      }

      .hero-actions {
        gap: 8px;
      }

      .hero-actions .button {
        padding: 0 13px;
        font-size: 12px;
      }

      .skills-grid {
        gap: 10px;
      }

      .skill-card {
        min-height: 145px;
        padding: 17px;
      }
    }

    :root {
      color-scheme: dark;
      --ink: #edf2f4;
      --muted: #a0adb5;
      --paper: #0b1016;
      --green: #69e2e0;
      --lime: #f4a62a;
      --line: #293640;
      --clay: #ff7043;
    }

    body {
      background:
        radial-gradient(ellipse at 78% 10%, rgb(20 89 103 / 20%), transparent 34rem),
        linear-gradient(rgb(110 141 157 / 5%) 1px, transparent 1px),
        linear-gradient(90deg, rgb(110 141 157 / 5%) 1px, transparent 1px),
        #0b1016;
      background-size: auto, 36px 36px, 36px 36px, auto;
    }

    .page-shell {
      width: min(1200px, calc(100% - 64px));
    }

    .site-header {
      border-bottom-color: rgb(105 226 224 / 18%);
      background: rgb(11 16 22 / 88%);
    }

    .brand {
      color: #edf2f4;
      font-family: "Segoe UI", Arial, sans-serif;
      font-size: 15px;
      letter-spacing: 0.12em;
    }

    .brand span {
      color: var(--lime);
    }

    .nav-link {
      color: #a0adb5;
      letter-spacing: 0.04em;
      text-transform: uppercase;
    }

    .nav-link:hover,
    .nav-link:focus-visible {
      color: var(--green);
    }

    .nav-link::after {
      height: 2px;
      background: var(--lime);
    }

    .hero {
      position: relative;
      isolation: isolate;
      min-height: 690px;
      padding: 104px 0 112px;
    }

    .hero::before {
      position: absolute;
      inset: 42px -24px;
      z-index: -1;
      border: 1px solid rgb(105 226 224 / 14%);
      background:
        linear-gradient(125deg, rgb(24 38 47 / 92%), rgb(14 21 28 / 76%) 56%, rgb(26 36 39 / 80%));
      clip-path: polygon(0 0, 97% 0, 100% 8%, 100% 91%, 97% 100%, 3% 100%, 0 94%);
      content: "";
    }

    .eyebrow {
      border-color: rgb(105 226 224 / 26%);
      border-radius: 3px;
      background: rgb(105 226 224 / 6%);
      color: var(--green);
      font-size: 10px;
      letter-spacing: 0.17em;
    }

    .eyebrow::before {
      width: 8px;
      height: 8px;
      background: var(--lime);
      box-shadow: 0 0 12px rgb(244 166 42 / 70%);
    }

    h1 {
      color: #edf2f4;
      font-size: clamp(62px, 9.2vw, 108px);
      letter-spacing: -0.08em;
      text-shadow: 0 4px 30px rgb(0 0 0 / 28%);
    }

    h1 span {
      color: var(--green);
      text-shadow: 0 0 32px rgb(105 226 224 / 16%);
    }

    .hero-copy {
      color: #a9b5bb;
    }

    .button {
      min-height: 46px;
      border: 1px solid var(--green);
      border-radius: 3px;
      background: var(--green);
      color: #081216;
      font-weight: 750;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      clip-path: polygon(0 0, calc(100% - 11px) 0, 100% 11px, 100% 100%, 11px 100%, 0 calc(100% - 11px));
      box-shadow: 0 0 22px rgb(105 226 224 / 14%);
    }

    .button:hover {
      background: #9df6ee;
      color: #081216;
      box-shadow: 0 0 28px rgb(105 226 224 / 30%);
    }

    .button.secondary {
      border-color: #42545f;
      background: #141e26;
      color: #dce6e9;
    }

    .button.secondary:hover {
      border-color: var(--lime);
      background: #242a2b;
      color: var(--lime);
    }

    .portrait-card {
      min-height: 440px;
      border: 1px solid rgb(105 226 224 / 30%);
      border-radius: 4px;
      background:
        radial-gradient(ellipse at 50% 45%, rgb(23 103 116 / 35%), transparent 53%),
        linear-gradient(145deg, #1a2931, #101820 70%);
      box-shadow: inset 0 0 55px rgb(105 226 224 / 7%), 0 28px 70px rgb(0 0 0 / 32%);
      clip-path: polygon(0 0, 86% 0, 100% 14%, 100% 100%, 14% 100%, 0 86%);
    }

    .portrait-card::before {
      width: min(82%, 360px);
      height: auto;
      aspect-ratio: 1;
      border-color: rgb(105 226 224 / 20%);
      border-radius: 50%;
      box-shadow: 0 0 0 14px rgb(105 226 224 / 3%), 0 0 45px rgb(105 226 224 / 10%);
    }

    .portrait-card::after {
      width: min(70%, 310px);
      height: auto;
      aspect-ratio: 1;
      border-color: rgb(244 166 42 / 25%);
      border-radius: 50%;
    }

    .mech-portrait {
      position: relative;
      z-index: 1;
      width: min(78%, 340px);
      filter: drop-shadow(0 14px 28px rgb(0 0 0 / 48%));
    }

    .portrait-caption {
      right: 24px;
      bottom: 22px;
      left: 24px;
      z-index: 2;
      padding: 12px 14px;
      border: 1px solid rgb(105 226 224 / 24%);
      border-radius: 2px;
      background: rgb(8 14 19 / 82%);
      color: #b7c5ca;
      font-size: 10px;
      font-weight: 700;
      letter-spacing: 0.14em;
      text-transform: uppercase;
      backdrop-filter: blur(10px);
    }

    .about,
    .contact {
      border-top-color: rgb(105 226 224 / 17%);
    }

    .section-label {
      color: var(--lime);
      letter-spacing: 0.16em;
    }

    .about h2,
    .skills-heading h2,
    .contact-content h2 {
      color: #eef3f4;
      letter-spacing: -0.055em;
    }

    .about p,
    .contact-content > p {
      color: #a0adb5;
    }

    .skills-grid {
      gap: 14px;
    }

    .skill-card {
      min-height: 250px;
      border-color: #2c3b45;
      border-radius: 4px;
      background: linear-gradient(145deg, rgb(25 37 45 / 96%), rgb(15 23 30 / 96%));
      box-shadow: inset 0 1px rgb(255 255 255 / 3%);
      clip-path: polygon(0 0, calc(100% - 16px) 0, 100% 16px, 100% 100%, 0 100%);
    }

    .skill-card:hover {
      border-color: rgb(105 226 224 / 50%);
      box-shadow: inset 0 1px rgb(255 255 255 / 5%), 0 12px 30px rgb(0 0 0 / 25%);
    }

    .skill-visual {
      border-color: rgb(105 226 224 / 16%);
      border-radius: 2px;
      background:
        linear-gradient(135deg, rgb(105 226 224 / 5%) 25%, transparent 25%) -10px 0 / 22px 22px,
        linear-gradient(225deg, rgb(105 226 224 / 5%) 25%, transparent 25%) -10px 0 / 22px 22px,
        linear-gradient(315deg, rgb(105 226 224 / 5%) 25%, transparent 25%) 0 0 / 22px 22px,
        #101a21;
    }

    .skill-visual--html,
    .skill-visual--css,
    .skill-visual--javascript,
    .skill-visual--php {
      background:
        radial-gradient(ellipse at center, rgb(105 226 224 / 11%), transparent 60%),
        linear-gradient(145deg, #17262e, #10171e);
    }

    .skill-visual--html::before {
      border: 2px solid rgb(105 226 224 / 72%);
      border-radius: 3px;
      background: linear-gradient(145deg, rgb(105 226 224 / 12%), rgb(7 14 18 / 66%));
      box-shadow: inset 0 0 0 8px rgb(105 226 224 / 5%), 0 0 18px rgb(105 226 224 / 10%);
    }

    .skill-visual--html::after {
      background: var(--lime);
      box-shadow: -18px 0 0 0 var(--clay), -36px 0 0 0 var(--green), 0 0 12px rgb(244 166 42 / 55%);
    }

    .skill-visual--css::before {
      border: 1px solid rgb(105 226 224 / 35%);
      border-radius: 3px;
      background: linear-gradient(90deg, rgb(105 226 224 / 16%), rgb(105 226 224 / 3%));
      box-shadow: inset 0 0 0 2px rgb(105 226 224 / 10%);
    }

    .skill-visual--css::after {
      border-radius: 2px;
      background: rgb(105 226 224 / 18%);
      box-shadow: 0 -32px 0 -8px rgb(244 166 42 / 36%), 0 -64px 0 -14px rgb(105 226 224 / 24%);
    }

    .skill-visual--javascript::before {
      border-color: rgb(105 226 224 / 32%);
      border-radius: 50%;
      box-shadow: 0 0 20px rgb(105 226 224 / 10%), inset 0 0 20px rgb(105 226 224 / 8%);
    }

    .skill-visual--javascript::after {
      background: radial-gradient(circle at center, transparent 0 20%, rgb(105 226 224 / 30%) 20.5% 21%, transparent 21.5% 100%);
    }

    .skill-visual--php::before {
      border: 2px solid rgb(105 226 224 / 64%);
      border-radius: 14px 14px 14px 3px;
      background: rgb(105 226 224 / 7%);
      box-shadow: 0 0 18px rgb(105 226 224 / 8%);
    }

    .skill-visual--php::after {
      border-radius: 2px;
      background: rgb(105 226 224 / 28%);
      box-shadow: -42px 0 0 0 rgb(244 166 42 / 26%), 42px 0 0 0 rgb(105 226 224 / 14%);
    }

    .skill-number {
      color: var(--lime);
      letter-spacing: 0.16em;
    }

    .skill-card h3 {
      color: #e8eff1;
    }

    .contact-content {
      border-color: rgb(105 226 224 / 24%);
      border-radius: 4px;
      background: linear-gradient(145deg, rgb(24 36 44 / 96%), rgb(15 22 29 / 96%));
      box-shadow: inset 0 1px rgb(255 255 255 / 4%);
    }

    .contact-form label {
      color: #dce6e9;
    }

    .contact-phone {
      display: flex;
      flex-wrap: wrap;
      align-items: baseline;
      gap: 8px;
      margin: 18px 0 0;
      color: #a0adb5;
      font-size: 12px;
    }

    .contact-phone a {
      color: var(--green);
      font-size: 15px;
      font-weight: 700;
      letter-spacing: 0.04em;
      text-decoration-color: rgb(105 226 224 / 45%);
      text-underline-offset: 4px;
    }

    .contact-phone a:hover,
    .contact-phone a:focus-visible {
      color: var(--lime);
    }

    .contact-form input,
    .contact-form textarea {
      border-color: #354650;
      border-radius: 3px;
      background: #0c141a;
      color: #edf2f4;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
      border-color: var(--green);
      box-shadow: 0 0 0 3px rgb(105 226 224 / 12%), 0 0 16px rgb(105 226 224 / 8%);
    }

    .contact-form input::placeholder,
    .contact-form textarea::placeholder {
      color: #778791;
    }

    .site-footer {
      border-top-color: rgb(105 226 224 / 17%);
      color: #87969e;
    }

    .footer-name {
      color: var(--green);
      letter-spacing: 0.08em;
      text-transform: uppercase;
    }

    :focus-visible {
      outline: 2px solid var(--lime);
      outline-offset: 4px;
    }

    @media (max-width: 760px) {
      .page-shell {
        width: min(100% - 36px, 560px);
      }

      .hero {
        min-height: auto;
        padding: 76px 0 84px;
      }

      .hero::before {
        inset: 28px -10px;
      }

      .portrait-card {
        min-height: 350px;
      }
    }

    @media (max-width: 420px) {
      .site-header nav {
        gap: 10px;
      }

      .nav-link {
        font-size: 10px;
      }

      .hero-actions .button {
        padding: 0 12px;
        font-size: 11px;
      }

      .skill-card {
        min-height: 220px;
        padding: 12px;
      }

      .skill-visual {
        height: 108px;
      }
    }

    :root {
      color-scheme: dark;
      --ink: #e6edf3;
      --muted: #9aa7b4;
      --paper: #0d1117;
      --green: #58a6ff;
      --lime: #7ee787;
      --line: #263341;
      --clay: #d2a8ff;
    }

    body {
      background:
        radial-gradient(ellipse at 78% 8%, rgb(56 139 253 / 13%), transparent 34rem),
        linear-gradient(rgb(139 148 158 / 4%) 1px, transparent 1px),
        linear-gradient(90deg, rgb(139 148 158 / 4%) 1px, transparent 1px),
        #0d1117;
      background-size: auto, 32px 32px, 32px 32px, auto;
    }

    .site-header {
      border-bottom-color: rgb(139 148 158 / 18%);
      background: rgb(13 17 23 / 88%);
    }

    .brand {
      color: var(--ink);
      font-family: Consolas, "Courier New", monospace;
      letter-spacing: 0.04em;
    }

    .brand span {
      color: var(--lime);
    }

    .nav-link {
      color: #b1bac4;
    }

    .nav-link:hover,
    .nav-link:focus-visible {
      color: var(--lime);
    }

    .nav-link::after {
      background: var(--lime);
    }

    .hero {
      min-height: 650px;
      gap: 7%;
      padding: 88px 0 96px;
    }

    .hero::before {
      inset: 34px -24px;
      border: 1px solid rgb(139 148 158 / 14%);
      border-radius: 18px;
      background: linear-gradient(125deg, rgb(22 27 34 / 88%), rgb(13 17 23 / 55%));
      clip-path: none;
    }

    .eyebrow {
      width: fit-content;
      padding: 8px 12px;
      border: 1px solid rgb(126 231 135 / 25%);
      border-radius: 999px;
      background: rgb(126 231 135 / 6%);
      color: var(--lime);
      font-family: Consolas, "Courier New", monospace;
      font-size: 11px;
      letter-spacing: 0.07em;
    }

    .eyebrow::before {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: var(--lime);
      box-shadow: 0 0 10px rgb(126 231 135 / 65%);
    }

    h1 {
      color: var(--ink);
      font-size: clamp(54px, 7.2vw, 88px);
      letter-spacing: -0.075em;
      line-height: 0.98;
      text-shadow: none;
    }

    h1 span {
      color: var(--lime);
      text-shadow: none;
    }

    .hero-copy {
      max-width: 470px;
      color: #a7b2bd;
    }

    .button {
      border-radius: 8px;
      clip-path: none;
      background: #238636;
      color: #fff;
      letter-spacing: 0;
      text-transform: none;
      box-shadow: none;
    }

    .button:hover {
      background: #2ea043;
      box-shadow: 0 8px 24px rgb(35 134 54 / 24%);
    }

    .button.secondary {
      border-color: #354252;
      background: #161b22;
      color: #d0d7de;
    }

    .button.secondary:hover {
      border-color: #58a6ff;
      background: #1c2632;
      color: #79c0ff;
    }

    .code-window {
      position: relative;
      min-width: 0;
      overflow: hidden;
      border: 1px solid #303d4d;
      border-radius: 14px;
      background: #0d1117;
      box-shadow: 0 28px 80px rgb(0 0 0 / 38%), 0 0 50px rgb(56 139 253 / 8%);
    }

    .code-window-bar {
      display: flex;
      min-height: 52px;
      align-items: center;
      gap: 14px;
      padding: 0 18px;
      border-bottom: 1px solid #263341;
      background: #161b22;
    }

    .window-dots {
      display: flex;
      gap: 7px;
    }

    .window-dots span {
      width: 9px;
      height: 9px;
      border-radius: 50%;
      background: #f85149;
    }

    .window-dots span:nth-child(2) {
      background: #d29922;
    }

    .window-dots span:nth-child(3) {
      background: #3fb950;
    }

    .code-file {
      color: #a7b2bd;
      font: 12px Consolas, "Courier New", monospace;
    }

    .code-window-body {
      display: grid;
      gap: 13px;
      padding: 28px 20px 34px;
      color: #d0d7de;
      font: 13px/1.6 Consolas, "Courier New", monospace;
    }

    .code-line {
      display: flex;
      min-width: 0;
      gap: 17px;
      white-space: nowrap;
    }

    .code-line-number {
      flex: 0 0 18px;
      color: #59636e;
      text-align: right;
      user-select: none;
    }

    .code-indent {
      padding-left: 34px;
    }

    .code-keyword {
      color: #ff7b72;
    }

    .code-variable {
      color: #79c0ff;
    }

    .code-string {
      color: #a5d6ff;
    }

    .code-window .portrait-caption {
      position: static;
      display: block;
      margin: 0 20px 20px;
      padding: 11px 13px;
      border: 1px solid rgb(126 231 135 / 18%);
      border-radius: 7px;
      background: rgb(126 231 135 / 5%);
      color: var(--lime);
      font: 11px Consolas, "Courier New", monospace;
      letter-spacing: 0.01em;
      text-align: left;
      text-transform: none;
      backdrop-filter: none;
    }

    .about,
    .contact {
      border-top-color: var(--line);
    }

    .section-label {
      color: var(--lime);
      font-family: Consolas, "Courier New", monospace;
      letter-spacing: 0.05em;
    }

    .about h2,
    .skills-heading h2,
    .contact-content h2 {
      color: var(--ink);
      letter-spacing: -0.055em;
    }

    .about p,
    .contact-content > p {
      color: var(--muted);
    }

    .skill-card {
      border-color: #263341;
      border-radius: 12px;
      background: linear-gradient(145deg, #161b22, #11161d);
      box-shadow: inset 0 1px rgb(255 255 255 / 3%);
      clip-path: none;
    }

    .skill-card:hover {
      border-color: rgb(88 166 255 / 55%);
      box-shadow: 0 14px 32px rgb(0 0 0 / 24%);
    }

    .skill-visual,
    .skill-visual--html,
    .skill-visual--css,
    .skill-visual--javascript,
    .skill-visual--php {
      border-color: rgb(88 166 255 / 18%);
      border-radius: 8px;
      background:
        linear-gradient(135deg, rgb(88 166 255 / 5%) 25%, transparent 25%) -8px 0 / 18px 18px,
        linear-gradient(225deg, rgb(88 166 255 / 5%) 25%, transparent 25%) -8px 0 / 18px 18px,
        #0d1117;
    }

    .skill-visual--html::before,
    .skill-visual--css::before,
    .skill-visual--javascript::before,
    .skill-visual--php::before {
      border-color: rgb(88 166 255 / 70%);
      background: rgb(88 166 255 / 9%);
      box-shadow: 0 0 22px rgb(88 166 255 / 12%);
    }

    .skill-visual--html::after,
    .skill-visual--css::after,
    .skill-visual--javascript::after,
    .skill-visual--php::after {
      background: var(--lime);
      box-shadow: -18px 0 0 0 #d2a8ff, -36px 0 0 0 #58a6ff, 0 0 12px rgb(126 231 135 / 40%);
    }

    .skill-number {
      color: var(--green);
      font-family: Consolas, "Courier New", monospace;
    }

    .skill-card h3 {
      color: var(--ink);
    }

    .contact-content {
      border: 1px solid #263341;
      border-radius: 14px;
      background: linear-gradient(145deg, #161b22, #11161d);
      box-shadow: inset 0 1px rgb(255 255 255 / 3%);
    }

    .contact-form label {
      color: #d0d7de;
    }

    .contact-phone {
      color: var(--muted);
    }

    .contact-phone a {
      color: var(--green);
      text-decoration-color: rgb(88 166 255 / 45%);
    }

    .contact-phone a:hover,
    .contact-phone a:focus-visible {
      color: var(--lime);
    }

    .contact-form input,
    .contact-form textarea {
      border-color: #303d4d;
      border-radius: 8px;
      background: #0d1117;
      color: var(--ink);
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
      border-color: var(--green);
      box-shadow: 0 0 0 3px rgb(88 166 255 / 14%);
    }

    .contact-form input::placeholder,
    .contact-form textarea::placeholder {
      color: #778391;
    }

    .site-footer {
      border-top-color: var(--line);
      color: var(--muted);
    }

    .footer-name {
      color: var(--lime);
      font-family: Consolas, "Courier New", monospace;
      letter-spacing: 0;
      text-transform: none;
    }

    :focus-visible {
      outline-color: var(--lime);
    }

    @media (max-width: 760px) {
      .hero {
        gap: 38px;
        padding: 64px 0 72px;
      }

      .hero::before {
        inset: 22px -10px;
      }

      .code-window {
        width: 100%;
      }
    }

    @media (max-width: 420px) {
      .code-window-body {
        gap: 10px;
        padding: 22px 12px 26px;
        font-size: 11px;
      }

      .code-line {
        gap: 10px;
      }

      .code-indent {
        padding-left: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="page-shell">
    <header class="site-header">
      <a class="brand" href="#home" aria-label="<?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?> home">JAYBEE<span>.</span></a>
      <nav aria-label="Main navigation">
        <a class="nav-link" href="#about">About me</a>
        <a class="nav-link" href="#skills">Skills</a>
        <a class="nav-link" href="resume.htm" download>Resume</a>
        <a class="nav-link" href="#contact">Contact</a>
      </nav>
    </header>

    <main>
      <section class="hero" id="home" aria-labelledby="hero-title">
        <div>
          <p class="eyebrow">IT STUDENT // WEB DEVELOPER</p>
          <h1 id="hero-title">Hi, I'm<br><span><?= htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') ?></span><br>Web developer.</h1>
          <p class="hero-copy">
            I build clean, responsive web experiences with HTML, CSS, JavaScript, and PHP. Take a look at what I work with and connect with me.
          </p>
          <div class="hero-actions">
            <a class="button" href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="Visit Instagram">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7.8 2h8.4A5.8 5.8 0 0 1 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8A5.8 5.8 0 0 1 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2Zm0 2A3.8 3.8 0 0 0 4 7.8v8.4A3.8 3.8 0 0 0 7.8 20h8.4a3.8 3.8 0 0 0 3.8-3.8V7.8A3.8 3.8 0 0 0 16.2 4H7.8ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 2a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm5.25-3.5a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5Z"/></svg>
              Instagram
            </a>
            <a class="button secondary" href="https://www.facebook.com/jaybeedesolongg/about/" target="_blank" rel="noopener noreferrer" aria-label="Visit Jaybee Desolong on Facebook">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13.5 21v-8.2h2.8l.4-3.2h-3.2v-2c0-.9.3-1.5 1.6-1.5h1.7V3.2c-.3 0-1.3-.2-2.5-.2-2.5 0-4.2 1.5-4.2 4.3v2.3H7.3v3.2h2.8V21h3.4Z"/></svg>
              Facebook
            </a>
            <a class="button secondary" href="https://github.com/jaybeedesolong-lgtm" target="_blank" rel="noopener noreferrer" aria-label="Visit Jaybee Desolong on GitHub">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 .9a11.1 11.1 0 0 0-3.5 21.6c.6.1.8-.2.8-.6v-2.1c-3.2.7-3.9-1.4-3.9-1.4-.5-1.3-1.3-1.6-1.3-1.6-1-.7.1-.7.1-.7 1.1.1 1.7 1.1 1.7 1.1 1 .1.8 2.4 3.8 1.7.1-.7.4-1.2.7-1.5-2.6-.3-5.3-1.3-5.3-5.8 0-1.3.5-2.3 1.2-3.1-.1-.3-.5-1.5.1-3.1 0 0 1-.3 3.2 1.2a11 11 0 0 1 5.8 0c2.2-1.5 3.2-1.2 3.2-1.2.6 1.6.2 2.8.1 3.1.8.8 1.2 1.8 1.2 3.1 0 4.5-2.7 5.5-5.3 5.8.4.3.8 1 .8 2v3c0 .4.2.7.8.6A11.1 11.1 0 0 0 12 .9Z"/></svg>
              GitHub
            </a>
            <a class="button secondary" href="#contact" aria-label="Send Jaybee a message">
              Contact me
            </a>
            <a class="button secondary" href="resume.htm" download aria-label="Download Jaybee's resume">
              Download resume
            </a>
          </div>
        </div>

        <div class="code-window" role="img" aria-label="Code editor preview showing <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>'s web development skills">
          <div class="code-window-bar">
            <span class="window-dots" aria-hidden="true"><span></span><span></span><span></span></span>
            <span class="code-file">profile.js</span>
          </div>
          <div class="code-window-body" aria-hidden="true">
            <div class="code-line"><span class="code-line-number">01</span><span><span class="code-keyword">const</span> <span class="code-variable">developer</span> = {</span></div>
            <div class="code-line"><span class="code-line-number">02</span><span class="code-indent">name: <span class="code-string">'<?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>'</span>,</span></div>
            <div class="code-line"><span class="code-line-number">03</span><span class="code-indent">skills: [</span></div>
            <div class="code-line"><span class="code-line-number">04</span><span class="code-indent"><span class="code-string">'HTML'</span>, <span class="code-string">'CSS'</span>,</span></div>
            <div class="code-line"><span class="code-line-number">05</span><span class="code-indent"><span class="code-string">'JavaScript'</span>, <span class="code-string">'PHP'</span></span></div>
            <div class="code-line"><span class="code-line-number">06</span><span class="code-indent">],</span></div>
            <div class="code-line"><span class="code-line-number">07</span><span class="code-indent">focus: <span class="code-string">'Building for the web'</span></span></div>
            <div class="code-line"><span class="code-line-number">08</span><span>};</span></div>
          </div>
          <span class="portrait-caption">●&nbsp; OPEN TO BUILDING GREAT THINGS</span>
        </div>
      </section>

      <section class="about" id="about" aria-labelledby="about-title">
        <p class="section-label">01 / ABOUT ME</p>
        <div>
          <h2 id="about-title">Getting to know me.</h2>
          <p>
            My name is <?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>, and I'm in IT. I'm interested in technology and enjoy learning new things in the field. This page is a simple introduction and a place to find me on social media.
          </p>
        </div>
      </section>

      <section class="skills" id="skills" aria-labelledby="skills-title">
        <div class="skills-heading">
          <p class="section-label">02 / TECH STACK</p>
          <h2 id="skills-title">Tools I work with.</h2>
        </div>
        <div class="skills-grid">
          <article class="skill-card">
            <div class="skill-visual skill-visual--html" aria-hidden="true"></div>
            <span class="skill-number">01</span>
            <h3>HTML</h3>
          </article>
          <article class="skill-card">
            <div class="skill-visual skill-visual--css" aria-hidden="true"></div>
            <span class="skill-number">02</span>
            <h3>CSS</h3>
          </article>
          <article class="skill-card">
            <div class="skill-visual skill-visual--javascript" aria-hidden="true"></div>
            <span class="skill-number">03</span>
            <h3>JavaScript</h3>
          </article>
          <article class="skill-card">
            <div class="skill-visual skill-visual--php" aria-hidden="true"></div>
            <span class="skill-number">04</span>
            <h3>PHP</h3>
          </article>
        </div>
      </section>

      <section class="contact" id="contact" aria-labelledby="contact-title">
        <p class="section-label">03 / CONTACT</p>
        <div class="contact-content">
          <h2 id="contact-title">Let's talk.</h2>
          <p>Fill in your details and send me a message.</p>
          <p class="contact-phone">
            <span>Call or text me:</span>
            <a href="tel:+639318554296">09318554296</a>
          </p>
          <form class="contact-form" action="send.php" method="post">
            <label for="contact-name">Your name
              <input id="contact-name" name="name" type="text" autocomplete="name" maxlength="100" required>
            </label>

            <label for="contact-email">Your email
              <input id="contact-email" name="email" type="email" autocomplete="email" maxlength="254" required>
            </label>

            <label for="contact-message">Message
              <textarea id="contact-message" name="message" maxlength="5000" required></textarea>
            </label>

            <button class="button" type="submit">Send message</button>
          </form>
        </div>
      </section>
    </main>

    <footer class="site-footer">
      <span class="footer-name"><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></span>
      <span>&copy; <?= htmlspecialchars($year, ENT_QUOTES, 'UTF-8') ?>. Thanks for stopping by.</span>
    </footer>
  </div>
</body>
</html>

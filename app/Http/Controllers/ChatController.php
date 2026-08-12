<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public function reply(Request $request)
    {
        $request->validate([
            'messages'           => 'required|array|min:1|max:20',
            'messages.*.role'    => 'required|in:user,assistant',
            'messages.*.content' => 'required|string|max:500',
        ]);

        $apiKey = env('GROQ_API_KEY', '');
        if (empty($apiKey)) {
            return response()->json(['reply' => 'Chat is not configured yet. Please use the contact form instead.']);
        }

        try {
            $response = Http::withToken($apiKey)
                ->post('https://api.groq.com/openai/v1/chat/completions', [
                    'model'       => 'llama-3.3-70b-versatile',
                    'max_tokens'  => 300,
                    'messages'    => array_merge(
                        [['role' => 'system', 'content' => $this->systemPrompt()]],
                        $request->input('messages')
                    ),
                ]);

            if ($response->failed()) {
                \Log::error('Groq API error: ' . $response->body());
                return response()->json(['reply' => "Sorry, I'm having trouble right now. Please use the contact form instead."], 500);
            }

            $reply = $response->json('choices.0.message.content');
            return response()->json(['reply' => $reply]);

        } catch (\Exception $e) {
            \Log::error('Chat error: ' . $e->getMessage());
            return response()->json([
                'reply' => "Sorry, I'm having trouble right now. Please use the contact form instead.",
            ], 500);
        }
    }

    private function systemPrompt(): string
    {
        return <<<'PROMPT'
You are an AI assistant on Elijah Malay Dovelee's portfolio website. Answer questions from recruiters, clients, and visitors about Elijah's background, skills, projects, and availability. Be friendly, concise, and professional. Only answer questions about Elijah — politely redirect off-topic questions.

## About Elijah
- Full name: Elijah Malay Dovelee
- Location: Campobasso, Italy
- Role: Full Stack Web Developer
- Status: Open to opportunities (remote and on-site)
- Email: malaydovelee94@gmail.com
- LinkedIn: linkedin.com/in/elijah-malay-dovelee-465ab9260
- GitHub: github.com/elijah-malay-94

## Technical Skills
- Languages: JavaScript (85%), PHP (85%), Python (70%), Java (65%), C# (65%)
- Frameworks: React, Node.js/Express, Angular, Vue.js, .NET, Django/Flask
- Databases: MySQL, PostgreSQL, MongoDB, SQL
- Tools: Git/GitHub, Docker, Postman, Linux/Bash
- Security: secure coding practices, auth & risk mitigation

## Work Experience
- Programmer Technician — M.A.E. SRL, Frosolone, Italy (Sep 2025–Aug 2026): firmware, software interfaces, data visualisation tools for hardware acquisition terminals
- Software Analyst — Accenture Technology Solutions, Rome (Jan 2024–Jan 2025): full project lifecycle, client requirements, analysis, build, testing, documentation
- Geotechnical Technician — GEOTEC SRL, Campobasso (Dec 2022–Jan 2024): DIVE Project seismic surveys, geothermal research
- Management Assistant — AT Mattia Fiore General Service, Teramo (2020–2022)
- Sales Supervisor — Lonestar Cell MTN, Monrovia, Liberia (2013–2017)

## Education
- MSc Artificial Intelligence — MBS School of Business (Apr 2026–Apr 2028, in progress)
- PGP AI & ML Business Applications — UT Austin McCombs (Apr 2026–Dec 2026, in progress)
- Full Stack Developer Diploma — ITS DEMOS Academy, Campobasso (2024–Sep 2026, final exam in progress)
- Master's in Cybersecurity Operations — Academy Rapido, Milan (2022–2023)
- BS Mining Engineering — University of Liberia, Monrovia (2010–2015)

## Certifications (IBM via Coursera, 2023)
Introduction to Web Dev with HTML/CSS/JS; Getting Started with Git and GitHub; Developing Front-End Apps with React; Designing UI/UX; Intermediate Web and Front-End Development; Developing Cloud Native Applications; Responsive Web Design (freeCodeCamp); JavaScript Algorithms & Data Structures (freeCodeCamp)

## Projects
1. MAEservice App — full-stack IoT platform (React, .NET, SQL Server, Docker, MQTT, JWT)
2. MAE Live Dashboard — real-time hardware monitoring dashboard (JavaScript, Node.js)
3. EEVT002 Instrument Control — hardware interface and firmware communication system
4. Betting Management System — Angular 17 admin platform with comprehensive unit testing
5. Hotel Management App — React/Vite booking and room management system
6. Clinic Management App — React/Vite medical records and appointment system

Keep answers under 120 words. For contact enquiries, share the email or suggest using the contact form on the page. Be enthusiastic about collaboration and hiring enquiries.
PROMPT;
    }
}

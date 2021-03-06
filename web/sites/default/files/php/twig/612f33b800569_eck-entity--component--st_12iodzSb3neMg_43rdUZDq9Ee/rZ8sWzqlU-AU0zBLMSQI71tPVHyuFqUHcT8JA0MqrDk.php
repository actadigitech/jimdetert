<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/actadigitech/templates/component/intro_text/eck-entity--component--start-your-journey-intro.html.twig */
class __TwigTemplate_71720cff820f8c699890b243f51c265be273526de64adcb899cd84e1209f4969 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["body"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eck_entity"] ?? null), "field_intro_text", [], "any", false, false, true, 1), "getValue", [], "method", false, false, true, 1), 0, [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1);
        // line 2
        echo "
";
        // line 3
        $context["classes"] = [0 => "opportunities-section opportunities-section_planning opportunities-section_start white"];
        // line 6
        echo "
<section";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 7), 7, $this->source), "html", null, true);
        echo ">
  ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 8, $this->source), "html", null, true);
        echo "
  ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 9, $this->source), "html", null, true);
        echo "
  <div class=\"narrow_width_plus_padding\">
    <div class=\"narrow_width s_inner\">
      ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 12, $this->source));
        echo "
    </div>
  </div>
</section>

<section class=\"opportunities-section opportunities-section_planning opportunities-section_start white\">
  <div class=\"medium_width_plus_padding\">
    <div class=\"medium_width s_inner\">
      <div class=\"tabset-block\">
        <ul class=\"tabset tabset_images\">
          <li class=\"active\">
            
            <a href=\"#tab-1\">
              <div class=\"tab-image__block\">
                <div class=\"tab-image image-chat\"></div>
              </div>
              <span>1. Create the right conditions</span>
            </a>
          </li>
          <li>
            
            <a href=\"#tab-2\">
              <div class=\"tab-image__block\">
                <div class=\"tab-image image-choose\"></div>
              </div>
              <span>2. Choose Your Battles</span>
            </a>
          </li>
          <li>
            <a href=\"#tab-3\">
              <div class=\"tab-image__block\">
                <div class=\"tab-image image-time\"></div>
              </div>
              <span>3. Manage the Moment</span>
            </a>
          </li>
          <li>
            <a href=\"#tab-4\">
              <div class=\"tab-image__block\">
                <div class=\"tab-image image-way\"></div>
              </div>
              <span>4. After the Act</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class=\"opportunities-section opportunities-section_planning white\">
  <div class=\"medium_width_plus_padding\">
    <div class=\"medium_width s_inner\">
      <div class=\"tab-content\">
        <div id=\"tab-1\" class=\"tab active\">
          <h3>1. Create the Right Conditions</h3>
          <div class=\"main-text accordion-block\">
            <p>
              People who fare well in the moment have often done lots of things ahead of time to increase the likelihood that their courageous act goes well. They???ve consistently demonstrated their competence and shown that they???re warm, emotionally intelligent, and fair. They???ve also increased the likelihood that they???ll be OK no matter how it goes by keeping their value high and dependence low.
            </p>
            <div class=\"df-row\">
              <div class=\"col-md-6 opp-col\">
              <div class=\"top-text equalHeight\">
                <p class=\"standfirst top-line\">Building your internal reputation</p>
                <p>
                  Before choosing courage in specific instances, it helps to have earned what psychologists call ???idiosyncrasy credits??? ??? a stock of goodwill garnered from previous actions that allow you to survive and even thrive when pushing boundaries. You build this type of strong internal reputation by consistently demonstrating warmth and competence ??? the two foundations of trust. One key to building trust is to be consistently fair, so that even those you???re challenging or seeking support from believe your intentions are good.
                </p>
                </div>
                <div class=\"bottom-text\">
                  <h6 class=\"accordion-block__heading\">
                    Read more below
                  </h6>
                  <div class=\"accordion-block__item\">
                    <div class=\"accordion-block__title\">
                      <span>Warmth and competence are key</span>
                      <div class=\"accordion-block__icon\"></div>
                    </div>
                    <div class=\"accordion-block__content\">
                      <div class=\"short-text\">
                        <p>
                          When people decide if they trust and respect us, they???re implicitly assessing whether they see us as <em>warm</em> and competent. Whether we???re seen as warm depends on whether people believe we have their best interest at heart: that we???re kind, decent, and moral. Whether we???re seen as <em>competent</em> depends on whether people think we can actually accomplish what we set out to do: our ability to get the job done.
                        </p>
                        <p>
                          When people think we???re warm and competent, they feel good about us too. They find us inspiring and praiseworthy. When they think we???re lacking in warmth or competence, they feel angry, envious, or fearful. If you want to increase the chances that your behavior will be perceived as courageous and worth doing something about, work consistently to establish your warmth and competence in the minds of others.
                        </p>
                        <p>
                          Consider two examples from the same organization, where both employees were seen as competent but only one was perceived as warm. Zak, a sales representative, spoke up about the problems with the company???s compensation policy. The issues he pointed out were legitimate, but Zak???s reputation of selfishness overshadowed the validity of his points and no changes were made.
                        </p> 
                        <p>
                          Conversely, Frank, another sales representative, was known to be highly committed to customer service in ways that built loyalty to the firm. He, too, spoke up about things like the need to improve after-hours service calls. Even though he wasn???t any more skilled in his approach than Zak, managers knew that Frank???s heart was in the right place and thus labeled him courageous rather than insubordinate, and applied real effort to address the issues he raised.
                        </p>
                      </div>
                      <div class=\"accordion-block__btn\">READ MORE</div>
                    </div>
                  </div>
                  <div class=\"accordion-block__item\">
                    <div class=\"accordion-block__title\">
                      <span>You gotta be fair</span>
                      <div class=\"accordion-block__icon\"></div>
                    </div>
                    <div class=\"accordion-block__content\">
                      <div class=\"short-text\">
                        <p>
                          Being seen as consistently fair makes a huge difference at work, as it does elsewhere in life. People will have a hard time seeing you as warm or competent ??? that is, as trustworthy ??? if they don???t think your standards are the same for everyone.
                        </p>
                        <p>
                          If you want to get nowhere in a hurry, try telling someone else they should ???be more objective,??? ???be willing to make cuts,??? or ???push for a higher standard??? when you???re seen as routinely ignoring these things when they???re problematic for your people or your point of view.
                        </p>
                        <p>
                          In <em>Choosing Courage</em>, we learn about George, a shop manager who hired his nephew only to find out the kid was a dud. While thinking about firing his nephew, George???s sister made it clear that doing so would lead to irreparable damage to their relationship. And George knew that he could cover up for his nephew???s mistakes, offer him additional chances, and dedicate extra time to training him.</p>
                        <p>
                          But George didn???t. When his nephew???s trial period ended, George advised that he be fired. George???s entire family was irate; his sister cut him off for years. But his employees liked and trusted him even more. ???I did what I did because rules apply to everyone,??? George said, ???including family.??? That???s what being fair is all about: treating people the same even when it really costs you.
                        </p>
                      </div>
                      <div class=\"accordion-block__btn\">READ MORE</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-md-6 opp-col\">
                <div class=\"top-text equalHeight\">
                <p class=\"standfirst top-line\">Maximizing your autonomy</p>
                <p>
                  Choosing courage is easier if you reduce the overall risks to yourself of others??? disapproval. You can do this by keeping your internal value and external mobility high. And you can make financial choices that lessen your fear of the consequences of taking risks. You can also foster a broad base of social support and personal well-being so you???re less concerned about others??? approval at work. Collectively, these actions help you feel less dependent on your specific boss or employer, and thus support taking prudent risks for worthy causes.
                </p>
                </div>
                <div class=\"bottom-text\">
                  <h6 class=\"accordion-block__heading\">
                    Read more below
                  </h6>
                  <div class=\"accordion-block__item\">
                    <div class=\"accordion-block__title\">
                      <span>The importance of job security and mobility</span>
                      <div class=\"accordion-block__icon\"></div>
                    </div>
                    <div class=\"accordion-block__content\">
                      <div class=\"short-text\">
                        <p>
                          It???s easier to challenge those with more power if you know your job is secure. While few of us are objectively safe from firing, there are things we can do to make ourselves so valuable that it would be very hard for our boss or organization to let us go.
                        </p>
                        <p>
                          You can, for example, continually invest in the particular skillsets that your organization can???t do without. This might be a skill or knowledge base that???s rare on the market, or that would take a long time for someone else to pick up. This might be signaled by educational credentials or certifications, but can also just reflect unique ways of adding value internally.
                        </p>
                        <p>
                          For example, you might work to become the only person who can get finicky machines running again quickly or the one person who really understands the crazy bugs that plague a piece of critical software. Or you might cultivate a social network that allows you to routinely solve complex problems by bringing together the right people at the right times. This is different than being generally competent in your work, which many people are. It???s about being difficult to replace. 
                        </p>
                        <p>
                          Another way to reduce your fear of acting courageously is to keep your job mobility high. If you know that lots of other places would value your talents, you don???t need to worry quite as much about how insiders react to your bold actions.
                        </p>
                        <p>
                          Throwing your weight around just because you???d be hard to replace, or because others know you could leave tomorrow isn???t the goal. (Remember, being perceived as warm matters a lot.) But these things help reduce the real and perceived risks of acting courageously.  
                        </p>
                      </div>
                      <div class=\"accordion-block__btn\">READ MORE</div>
                    </div>
                  </div>
                  <div class=\"accordion-block__item\">
                    <div class=\"accordion-block__title\">
                      <span>Avoid financial handcuffs</span>
                      <div class=\"accordion-block__icon\"></div>
                    </div>
                    <div class=\"accordion-block__content\">
                      <div class=\"short-text\">
                        <p>
                          We???ve all heard about the golden handcuffs that make it hard for some employees to leave. Those same handcuffs also create fear of getting fired. They???re a major reason why even high-status, high-income employees often choose to remain silent or overly-cautious. 
                        </p>
                        <p>
                          Most of us don???t have as much gold at stake if we walked away or got fired, but that doesn???t mean we don???t feel equally tethered to our jobs and hesitant to anger those above us. 
                        </p>
                        <p>
                          We all know people who get a raise but then increase their expenses by the same amount. They???ve earned more, but they???re no freer from the ???wage dependency??? of their job than they were the year before. Here???s an unpleasant truth: If you spend 100% of whatever your income is, and don???t have much saved up, it???s going to be harder to accept the risks associated with acting courageously at work. 
                        </p>
                        <p>
                          It takes real discipline to avoid this trap. As shared in <em>Choosing Courage</em>, when Franco Bernabe became a CEO, he purposefully rejected many of the perks. This made it easier to take risks, he said, because, his lifestyle wouldn???t have changed even if he???d lost his job. 
                        </p>
                        <p>
                          We can all build a safety net and an acceptable fallback position. We can save enough to support a lengthy transition, and be clear about the lifestyle sacrifices we???d make to stand up for our principles. Creating the freedom to choose what we will and won???t do is no one???s job but our own. 
                        </p>
                      </div>
                      <div class=\"accordion-block__btn\">READ MORE</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"navigation-item-block\">
            <div class=\"col\">
              <a style=\"display: none;\" href=\"#tab-4\" class=\"navigation-item navigation-item_prev\">
                <img class=\"navigation-item__icon\" src=\"../themes/custom/actadigitech/static/images/pages/start-journey/arrow-right-blue.svg\" alt=\"\">
                <span>After the Act</span>
                <div class=\"navigation-item__direction\">previous</div>
              </a>
            </div>
            <div class=\"col\">
              <a href=\"#tab-2\" class=\"navigation-item navigation-item_next\">
                <div class=\"navigation-item__direction\">next</div>
                <span>Choose Your Battles</span>
                <img class=\"navigation-item__icon\" src=\"../themes/custom/actadigitech/static/images/pages/start-journey/arrow-right-blue.svg\" alt=\"\">
              </a>
            </div>
          </div>
        </div>
        <div id=\"tab-2\" class=\"tab\">
          <h3>2. Choose Your Battles</h3>
          <div class=\"main-text\">
            <p>
              Taking on every issue will only get you labeled as an instigator and reduce your influence. Always concluding it???s not the right issue or right time will lead to little action and lots of regret. So how do you choose your battles wisely? You can start by getting clarity about what???s really important to you and those you care about most, and by carefully assessing when you???re most likely to achieve your objectives if you act courageously.
            </p>
            <div class=\"df-row\">
              <div class=\"col-md-6\">
                <p class=\"standfirst top-line\">Is it really important?</p>
                <p>
                  What???s important enough to <em>you</em> to act on despite the risks is a deeply personal matter. Competently courageous people seem to consider several key questions before choosing courage. For example, they clarify their key values and goals, and they focus on acts that are necessary to remain true to themselves. They know what they want their life to stand for, what they must do to create the legacy they want. And they choose consciously based on these guideposts, rather than being dragged along mindlessly by their emotions.
                </p>
                <div>
                  <h6 class=\"accordion-block__heading\">
                    Read more below
                  </h6>
                  <div class=\"accordion-block__item\">
                    <div class=\"accordion-block__title\">
                      <span>Being true to yourself</span>
                      <div class=\"accordion-block__icon\"></div>
                    </div>
                    <div class=\"accordion-block__content\">
                      <div class=\"short-text\">
                        <p>
                          Being true to yourself requires you to choose courage when your core values, identity, or humanity is at stake. It???s about choosing action to live authentically ??? to feel proud of yourself rather than like a fraud in your own skin. It???s the knowledge that you must act because it is who you are.
                        </p>
                        <p>
                          Being true to yourself involves doing the things you hope people will say about you when you???re gone. David Brooks calls these ???eulogy virtues??? in contrast to the ???resume virtues??? we often let dictate our actions. Because courage also involves acting despite risk, you need to be clear about what???s more important to you than the potential economic or social costs of your act.
                        </p>
                        <p>
                          For Dirk, the decision to confront a boss who had shown him little respect for years came down to the recognition that he would feel satisfied and proud for standing up for himself and his teammates however it went.
                        </p>
                        <p>
                          So, when Dirk???s boss attacked him in an email that included a half dozen other influential people, Dirk immediately set up a meeting. When his boss kicked it off in his usual authoritarian style, Dirk interrupted, stating that he wasn???t there to receive another lecture. He told his boss that he wanted to be treated with respect, that the insults had hurt him, and that he found it cowardly to send an email with other leaders copied rather than having a one-on-one conversation. 
                        </p>
                        <p>
                          There???s no Hollywood ending to this story, but one that in real life makes Dirk proud. He and his boss still don???t like each other, but they???ve reached a point of mutual respect. And Dirk now approaches his boss with confidence. 
                        </p>
                      </div>
                      <div class=\"accordion-block__btn\">READ MORE</div>
                    </div>
                  </div>
                  <div class=\"accordion-block__item\">
                    <div class=\"accordion-block__title\">
                      <span>Choose consciously</span>
                      <div class=\"accordion-block__icon\"></div>
                    </div>
                    <div class=\"accordion-block__content\">
                      <div class=\"short-text\">
                        <p>
                          Knowing who you are and what???s most important to you won???t do much good if you jump impulsively to action anytime you???re emotionally triggered. You want to choose actions consciously, having the energy to support them come from a deep sense of what???s right and most important to you, not from an emotional fuel that can easily get you off track.
                        </p>
                        <p>
                          When something is truly central to who you are and what you want to stand for, you don???t need to keep dramatizing or exaggerating what???s happened to keep yourself motivated to act. Of course, you might be legitimately angry about a violation of a core value or identity. You just shouldn???t need to distort reality to sustain that anger.
                        </p>
                        <p>
                          In <em>Choosing Courage</em> we see how a service manager, Kenny, was angry when he was told to fire his special needs employee. He knew that standing up in this situation was central to how he saw himself, but he didn???t have to claim his boss was a <em>???total</em> jerk??? or <em>???always</em> does rotten stuff??? to know that defending his employee with cerebral palsy was the right thing for him to do.
                        </p>
                        <p>
                          Choosing carefully requires deciphering what???s only a ???battle??? and what???s the ???overall war,??? and at avoiding spending capital on battles that, even if won, might actually undermine your broader mission. For Catherine Gill, that meant choosing consciously to only ???throw her body in front of the train??? one or two times a year at the most symbolic times. This allowed her to maintain support for her key objectives at Root Capital.
                        </p>
                      </div>
                      <div class=\"accordion-block__btn\">READ MORE</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"col-md-6\">
                <p class=\"standfirst top-line\">Is the timing right? </p>
                <p>
                  Good timing increases your chances for success. Aim to avoid pushing too early, when those you must influence aren???t ready or able to pay attention; conversely, don???t wait until it???s too late to matter. Pay attention to what???s getting attention inside your organization, so you can connect your act to that momentum. It can also help to seize opportunities presented by external events, especially when they provide pressure or cover you can use. Your goal, in short, should be to act when the attention cycle is at its peak.
                </p>
                <div>
                  <h6 class=\"accordion-block__heading\">
                    Read more below
                  </h6>
              <div class=\"accordion-block__item\">
                <div class=\"accordion-block__title\">
                  <span>Connecting to internal opportunities </span>
                  <div class=\"accordion-block__icon\"></div>
                </div>
                <div class=\"accordion-block__content\">
                  <div class=\"short-text\">
                    <p>
                      No matter how important you think your issue is in its own right, the reality is that there are always many more ideas vying for attention and resources than there is time and money. So, whenever possible, it???s a good practice to connect your action to things people controlling the agenda have already prioritized.
                    </p>
                    <p>
                      In <em>Choosing Courage</em>, we learn how Tachi Yamada consistently used this strategy to his advantage as a leader in the pharmaceutical industry. For example, as head of R&amp;D at Smith Kline Beecham, Yamada believed the overall structure for R&amp;D needed overhauling. It was the merger with Glaxo Wellcome that gave him the opening he needed. Pointing to the thin pipeline of both companies and the need to integrate two R&amp;D functions anyway, he seized the opportunity to introduce his bold structural innovation.
                    </p>
                    <p>
                      Sometimes you can connect your issue to an even larger one suddenly getting attention. For example, perhaps you???ve wanted greater employee diversity for years, but couldn???t get much traction while financial results were strong. Now, however with performance lagging, senior leaders are pushing hard on expansion or growth in less-saturated markets. This could be your chance to link the hiring of more international talent or people from different racial or socioeconomic backgrounds to a key business imperative.
                    </p>  
                    <p>
                      Similarly, often no one really wants to hear about your abusive or incompetent boss, or the morale problems in your unit, until a company-wide survey or high involuntary turnover gets the attention of senior leaders. Linking your specific problem or idea to the broader issue now getting attention can help.
                    </p>
                  </div>
                  <div class=\"accordion-block__btn\">READ MORE</div>
                </div>
              </div>
              <div class=\"accordion-block__item\">
                <div class=\"accordion-block__title\">
                  <span>Catch the attention cycle</span>
                  <div class=\"accordion-block__icon\"></div>
                </div>
                <div class=\"accordion-block__content\">
                  <div class=\"short-text\">
                    <p>
                      Sadly, sometimes you???re just not going to get traction no matter how compelling your case is until there???s evidence or pressure from the outside. Successful ???issue sellers??? are far more likely than those who fail to garner support for their issue to have paid attention to whether the larger context made the timing right to take action.
                    </p>
                    <p>
                      Macroeconomic or political conditions can be two obvious indicators of whether the time is right for pushing your idea. For example, there are countless examples of people who advocated for years to little avail for more gender and racial equity, and for greater punishment for misogynistic acts and sexual harassment in workplaces. Now, with the #metoo and Black Lives Matter movements creating significant attention and outrage, many organizations are being much more responsive. Is it right that it takes this kind of external pressure to get support for change? No. Is it often a reality you can use to your advantage? Yes.
                    </p>
                    <p>
                      Staying attuned to relevant ???attention cycles??? ??? the process by which issues emerge and stay active on the public policy scene ??? is a good way to assess the timing for making your move. What???s happening ???out there??? that makes your suggestion more attractive, or at least palatable, to those on the inside?
                    </p>
                    <p>
                      In one R&amp;D organization, researchers had learned that if they wanted senior leaders to support their projects, they had to share evidence that people in other companies or academic contexts were excited about the ideas. While it hurt their morale to know this, the tactic helped them secure the resources they needed.
                    </p>
                  </div>
                  <div class=\"accordion-block__btn\">READ MORE</div>
                </div>
              </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"navigation-item-block\">
            <div class=\"col\">
              <a href=\"#tab-1\" class=\"navigation-item navigation-item_prev\">
                <img class=\"navigation-item__icon\" src=\"../themes/custom/actadigitech/static/images/pages/start-journey/arrow-right-blue.svg\" alt=\"\">
                <span>Create the right conditions</span>
                <div class=\"navigation-item__direction\">previous</div>
              </a>
            </div>
            <div class=\"col\">
              <a href=\"#tab-3\" class=\"navigation-item navigation-item_next\">
                <div class=\"navigation-item__direction\">next</div>
                <span>Manage the Moment</span>
                <img class=\"navigation-item__icon\" src=\"../themes/custom/actadigitech/static/images/pages/start-journey/arrow-right-blue.svg\" alt=\"\">
              </a>
            </div>
          </div>
        </div>
        <div id=\"tab-3\" class=\"tab\">
          <h3>3. Manage the Moment</h3>
          <div class=\"main-text\">
            <p>
              You???ve set the stage well and chosen your battle carefully. Now you???ve got to be skilled at managing the moment itself when it comes. Doing this involves skillful framing of your words or action, as well as good choices about where, when, and how you act. It also involves skillful management of both your and others??? emotions, such that you???re energized not hijacked and others are open rather than defensive. 
            </p>
            <div class=\"df-row\">
              <div class=\"col-md-6\">
                <p class=\"standfirst top-line\">Manage the message</p>
                <p class=\"height_fix_may5\">
                  A critical part of managing the message involves understanding your targets??? perspective. Remember, it???s how they (not you) see it that determines whether you???ll get supported or rejected, openness or defensiveness. That???s why framing is such an important skill to master. Framing your issue as a threat or opportunity can make all the difference, as can describing it in economic versus cultural terms. Likewise, what data you use, where you take action, and who you involve can all impact what happens when you choose courage.
                </p>
                <div>
              <h6 class=\"accordion-block__heading\">
                    Read more below
                  </h6>
              <div class=\"accordion-block__item\">
                <div class=\"accordion-block__title\">
                  <span>Getting ready</span>
                  <div class=\"accordion-block__icon\"></div>
                </div>
                <div class=\"accordion-block__content\">
                  <div class=\"short-text\">
                    <p>
                      Sometimes our chance to act arises and vanishes in a heartbeat, but often we have time to optimize our approach. When you do have time, it???s helpful to consider the following questions.
                    </p>
                      
                    <p>
                      <em>Should I enlist help?</em> Sometimes it has to be you, and you alone. In many cases, though, you???ll get better traction if you involve others in what you say or do. Someone else might have more credibility than you do, and there can be strength in numbers.
                    </p>
                    <p>
                      <em>What???s the best context?</em> People don???t like feeling ambushed, and that???s how many will describe being confronted with new information in public. Given this, if nothing will be lost by bringing up your issue in private ??? at least the first time ??? it???s generally a good idea.
                    </p>
                    <p>
                      <em>What data and solutions can I offer?</em> If the building???s on fire, it???s OK to just yell fire without a plan. Most of the time, though, our chances to act courageously are not emergencies. We have time to prepare data that compellingly support our contention there???s a problem or opportunity, and time to develop at least one or two plausible solutions for further consideration. If you plow ahead without data or solutions, don???t be surprised if you get a poor reception.
                    </p>
                      
                    <p>
                      Ellen, for example, did these things well. She scheduled a one-on-one meeting with her skip-level boss to share with detailed examples what she saw as ???red flags??? about her direct boss. This allowed the senior leader to hear about the problems without feeling he had to immediately defend or criticize her boss in front of others. With time to speak to other employees, he learned that what Ellen had reported was true and shortly thereafter terminated her boss.  
                    </p>
                  </div>
                  <div class=\"accordion-block__btn\">READ MORE</div>
                </div>
              </div>
              <div class=\"accordion-block__item\">
                <div class=\"accordion-block__title\">
                  <span>Making the strongest case</span>
                  <div class=\"accordion-block__icon\"></div>
                </div>
                <div class=\"accordion-block__content\">
                  <div class=\"short-text\">
                    <p>
                      Courageous behaviors are risky because they???re inherently about stopping something problematic or starting something that hasn???t been done before. That???s why you need to choose your words carefully. You do not need to sugarcoat or distort your truth. But work to make it as easy as possible for people to hear and be compelled by what you say.
                    </p>
                    <p>
                      Even when you want someone???s behavior to change or resources to be used differently, you can find a way to convey that you???re advocating for growth, not total destruction of what has been. It???s a lot easier to get people to take the next step forward if they don???t first have to admit their way is inferior.
                    </p>
                      
                    <p>
                      Relatedly, people are more likely to accept what you???re saying if they believe you want to win with them, not alone or at their expense. Both Catherine Gill and Mel Exon, profiled in <em>Choosing Courage</em>, are masters at ???pulling their chair to the same side of the table??? and convincing those whose support they need that their requests come from a ???we??? not ???me??? frame.
                    </p>
                      
                    <p>
                      And don???t forget to consider whether key decision makers respond better to opportunities or threats. Barry, for example, suggested buying new anti-virus software. He first tried to convince his manager that this was a great opportunity to free up lots of time he wasted fixing infected computers. The boss was unmoved. Then Barry switched to threat framing, asking what would happen if word got out that customers??? information got stolen because they hadn???t invested in basic IT security. Faced with this ???what if??? scenario, the boss relented and approved the purchase.
                    </p>
                  </div>
                  <div class=\"accordion-block__btn\">READ MORE</div>
                </div>
              </div>
                  
                </div>
              </div>
              <div class=\"col-md-6\">
                <p class=\"standfirst top-line\">Manage emotions</p>
                <p class=\"height_fix_may5\">
                  The quality of what you intend to say or do won???t matter much if you???re shaking in your boots while talking, or go silent or flee the situation because you???re so scared at the first sign of resistance. Nor will you succeed if your anger is out of control. In short, managing the moment successfully requires that you manage emotions skillfully ??? yours and those you???re trying to influence. This is about keeping yourself safe, and about maximizing the odds that you create the positive outcomes you seek.
                </p>
                <div>
              <h6 class=\"accordion-block__heading\">
                    Read more below
                  </h6>
              <div class=\"accordion-block__item\">
                <div class=\"accordion-block__title\">
                  <span>Channeling your emotions</span>
                  <div class=\"accordion-block__icon\"></div>
                </div>
                <div class=\"accordion-block__content\">
                  <div class=\"short-text\">
                    <p>
                      Your ability to skillfully channel your emotions during difficult situations depends in part on you owning, rather than blaming others, for how you???re feeling. This starts by recognizing that your immediate reaction is only a ???partial??? view of reality ??? it???s not ???objectively??? what happened or what everyone else thinks happened, nor is it what you will likely think after you???ve tamped down the emotional part of your brain and processed it further.
                    </p>
                    <p>
                      Once you acknowledge that your immediate feelings are just that ??? feelings ??? you can take steps to control rather than be controlled by them. You can work at defusing initial pangs of rage or fear by the thoughts you choose next. For instance, when your boss starts shaking his head at your suggestion, you can choose thoughts that help calm yourself down, such as, ???I caught him at the wrong time??? or ???it???s not about me.??? Or, you can exaggerate and catastrophize ??? ???he???s <em>always</em> such a close-minded jerk??? or ???he???s got it in for me??? ??? and thereby make yourself even madder.
                    </p>
                    <p>
                      It???s hard to overstate the positive impact you might have if you manage to take a principled stand without losing your cool. Jared, for example, was inspired by a Black co-worker who calmly, but firmly, told a customer that he found his racist language hurtful and unacceptable. Until he saw the customer apologize, Jared had assumed it was impossible to confront this kind of situation without creating a scene and causing trouble with management.
                    </p>
                    <p>
                      One final note: Suggesting the need to channel your emotions doesn???t mean you shouldn???t show any emotions. You???re not emotionally skilled if you appear emotionless in situations where emotional reactions are normal and expected. 
                    </p>
                  </div>
                  <div class=\"accordion-block__btn\">READ MORE</div>
                </div>
              </div>
              <div class=\"accordion-block__item\">
                <div class=\"accordion-block__title\">
                  <span>Handling others??? emotions</span>
                  <div class=\"accordion-block__icon\"></div>
                </div>
                <div class=\"accordion-block__content\">
                  <div class=\"short-text\">
                    <p>
                      The starting point for keeping others??? emotions in check during stressful interactions is to work hard to understand the situation from their perspective. You don???t have to agree with their view, but showing that you???ve heard it can be helpful in itself. It also helps to avoid common phrases like ???the explanation?????? or ???the obvious problem?????? or ???it???s totally clear that?????? because these statements imply that there is only one valid point of view ??? the one you hold ??? and that they???re just being stupid or self-interested if they don???t see it the same way.
                    </p>
                    <p>
                      It???s also important to keep your statements focused on specific behaviors. Mention only the behavior or policy you find problematic, not your assumptions about the reasons for the actions or behaviors. And give a specific example. For example, stick to ???When I spoke about X just now, you turned immediately to the next topic without acknowledging me.??? Adding, ???it???s clear you don???t respect or care about me??? just invites disagreement about something you can???t prove and doesn???t change the behavior anyway.
                    </p>
                    <p>
                      One last reminder: Pay attention to non-verbal signals. There are all sorts of ways in which people???s faces and bodies convey what they???re really feeling no matter what they???re saying. For example, you may think your boss is responding positively to your pitch because she???s saying ???that???s interesting??? or ???keep going.??? But if she???s leaning way back or has angled her body away from you, her interest may be fairly low. And if her lips are pursed, her eyebrows furrowed, or jaw muscles tensed, there???s a good chance she???s feeling something beyond those encouraging words she???s just used. Time to stop pitching and ask for her honest feedback.
                    </p>
                  </div>
                  <div class=\"accordion-block__btn\">READ MORE</div>
                </div>
              </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class=\"navigation-item-block\">
            <div class=\"col\">
              <a href=\"#tab-2\" class=\"navigation-item navigation-item_prev\">
                <img class=\"navigation-item__icon\" src=\"../themes/custom/actadigitech/static/images/pages/start-journey/arrow-right-blue.svg\" alt=\"\">
                <span>Choose Your Battles</span>
                <div class=\"navigation-item__direction\">previous</div>
              </a>
            </div>
            <div class=\"col\">
              <a href=\"#tab-4\" class=\"navigation-item navigation-item_next\">
                <div class=\"navigation-item__direction\">next</div>
                <span>After the Act</span>
                <img class=\"navigation-item__icon\" src=\"../themes/custom/actadigitech/static/images/pages/start-journey/arrow-right-blue.svg\" alt=\"\">
              </a>
            </div>
          </div>
        </div>
        <div id=\"tab-4\" class=\"tab\">
          <h3>4. After the Act</h3>
          <div class=\"main-text\">
            <p>
              You???ve stood up to someone. Taken bold action. Exhausted, you???re probably inclined to retreat and lay low. While understandable, that???s often the worst thing to do if you want your action to produce positive results. What we do after a courageous act is often more important than the big moment itself. You???ve got to be willing to follow up, and to view your action as just one step in a longer journey of learning and growth.
            </p>
            <div class=\"df-row\">
              <div class=\"col-md-6\">
                <p class=\"standfirst top-line\">Following up </p>
                <p>Whether you???re feeling good about what you did or busy licking your wounds, there???s likely still work left to do if you want your initial action to produce the desired results. If you think you???ll get significant change based on one conversation, you???re probably wrong. If you???re now avoiding those who may have been confused, hurt, or angered, you???re probably missing an important opportunity. In short, follow up is critical. Competent courage often requires taking solidifying commitments, keeping others energized, and addressing potential relationship damage.
                </p>
                <div>
              <h6 class=\"accordion-block__heading\">
                    Read more below
                  </h6>
              <div class=\"accordion-block__item\">
                <div class=\"accordion-block__title\">
                  <span>Solidifying next steps</span>
                  <div class=\"accordion-block__icon\"></div>
                </div>
                <div class=\"accordion-block__content\">
                  <div class=\"short-text\">
                    <p>
                      Even when it seems to have gone well, if you???ve ended a conversation without explicit action plans or metrics, there???s a good chance you???ll be disappointed by what comes next. Busy people will forget what was discussed; people who weren???t that dissatisfied with the way things are will revert to automatic patterns. 
                    </p>
                    <p>
                      People who experienced positive outcomes following their courageous acts were significantly more likely to have touched base with their targets to discuss next steps. Follow up can take many forms. If your boss seemed to like your idea, you can schedule another meeting with the explicit goal of establishing next steps. If your peer finally seemed to hear what you were asking him to do differently, but you didn???t discuss what progress would look like, you can follow up with that as your agenda.
                    </p>
                    <p>
                      It can help to ask for things that will represent real progress but that won???t seem overwhelming or unrealistic to those you???re asking. 
                    </p>
                    <p>
                      For example, say your ultimate objective is equal representation of men and women at all managerial levels. If you ask senior managers to commit to getting to 50-50 within three years when you???re at 10-90 today, there???s a good chance you???ll walk away empty handed. 
                    </p>
                    <p>
                      You???ll stand a better chance if you ask for commitment to specific initiatives that support the overall goal. You might, for instance, ask them to commit to five targeted recruiting events per year, a leadership development program for 100 high potential females, and adoption of new technology that helps de-bias recruiting and promotion processes. 
                    </p>
                  </div>
                  <div class=\"accordion-block__btn\">READ MORE</div>
                </div>
              </div>
              <div class=\"accordion-block__item\">
                <div class=\"accordion-block__title\">
                  <span>Addressing negative reactions</span>
                  <div class=\"accordion-block__icon\"></div>
                </div>
                <div class=\"accordion-block__content\">
                  <div class=\"short-text\">
                    <p>
                      Courageous actions usually imply in one way or another that you think something currently happening is a problem, or at least sub-optimal. Given this, no matter how skillfully you frame what you say or do, there???s a reasonable likelihood that someone will be hurt, angry, or confused. 
                    </p>
                    <p>
                      You can ignore others??? feelings, hoping they???ll just get over them, but there???s a reasonable chance they???ll end up creating a problem for the changes you want. And if you care about those relationships, following up is simply the right thing to do. So, even though it can feel like yet another courageous act, it???s usually worth it to go address what you sense or know are lingering negative feelings.
                    </p>
                      <p>Inquiry, empathy, and humility are critical in these situations. Inquiry involves asking for others??? truth, even if it may be painful for you to hear. You might ask questions like, ???can you help me understand how you???re thinking and feeling???? or ???do you have data or experiences that lead you to see things differently???? Then, whether you agree or not, you can still empathize by saying things like, ???I know what it???s like to feel that way??? or ???I understand how you would see it that way.??? And you can show humility by acknowledging that your view is not the only plausible one, and by apologizing when it???s clear that what you said or how you said it fell short.
                    </p>
                    <p>
                      Following up with inquiry, empathy, and humility doesn???t guarantee a positive response, but it???s often the right thing to do anyway.
                    </p>
                  </div>
                  <div class=\"accordion-block__btn\">READ MORE</div>
                </div>
              </div>
                  
                </div>
              </div>
              <div class=\"col-md-6\">
                <p class=\"standfirst top-line\">Remember it???s a journey</p>
                <p>
                  Creating meaningful change usually requires sustained effort. First attempts to change how others act or systems operate seldom produce long-established patterns. That doesn???t mean first attempts are failures, even if that???s how it initially feels. It means you need to adopt a learning orientation, that you choose to see first attempts as opportunities to gather data from which you can learn and adjust rather than as conclusive proof of what???s (im)possible. Competent courage means you???ll need resilience ??? a commitment to persist and try again. 
                </p>
                <div>
              <h6 class=\"accordion-block__heading\">
                    Read more below
                  </h6>
              <div class=\"accordion-block__item\">
                <div class=\"accordion-block__title\">
                  <span>Being persistent</span>
                  <div class=\"accordion-block__icon\"></div>
                </div>
                <div class=\"accordion-block__content\">
                  <div class=\"short-text\">
                    <p>
                      If you???re only willing to step up or speak out one time, you either don???t understand how change actually comes about or you???re not that committed to what you???re trying to accomplish. Though we wish meaningful progress came easier, our own experiences and others??? shows time and again that it just doesn???t. History shows that the most notable achievers usually experienced repeated setbacks before finally succeeding. Why wouldn???t the same be true for us?
                    </p>
                    <p>
                      You???re sure to face pushbacks and setbacks in any organizational setting. Large groups of people seldom unanimously agree on right versus wrong or what???s more or less important to do with limited time and resources. And we wouldn???t call problems ???complex??? or behavior patterns ???entrenched??? if they were easy to address. That???s why you need persistence ??? a willingness to try and try again, expecting and accepting that meaningful improvement takes time and repeated effort to bring about.
                    </p>
                    <p>
                      Persistence isn???t just necessary to produce a specific change. It also increases the admiration and appreciation you get from colleagues. Sure, trying once is often appreciated. Real respect, though, is often reserved for those who keep trying despite initial roadblocks and rejections. 
                    </p>
                    <p>
                      In Choosing Courage, the amazing welfare-to-career program at Cascade Engineering is profiled. This social innovation (and others at Cascade) exist not due to a single stroke of genius or luck, but because Fred Keller, the company???s founder and chairman persevered long after others would have given up. 
                    </p>
                    <p>
                      What about you? How do you respond to initial setbacks? What are your strategies for ???getting back on the horse????
                    </p>
                  </div>
                  <div class=\"accordion-block__btn\">READ MORE</div>
                </div>
              </div>
              <div class=\"accordion-block__item\">
                <div class=\"accordion-block__title\">
                  <span>Having a learning orientation</span>
                  <div class=\"accordion-block__icon\"></div>
                </div>
                <div class=\"accordion-block__content\">
                  <div class=\"short-text\">
                    <p>
                      When your difficult conversation or bold move doesn???t go perfectly (and it seldom will), you can view what happened as a) a conclusive failure or b) as data from which you can learn. If you choose the former, the game is over; if you choose the latter, you???ve still got a chance to score more points.
                    </p>
                    <p>
                      Choosing to stay in the game is facilitated by a growth mindset or a learning orientation. This means you choose to see early setbacks or signs of failure as chances to learn before taking next steps, not as indicators of your limited ability or an impossible situation. While we vary in our instinctual responses, we can all choose to adopt a growth mindset in the face of challenges.
                    </p>
                    <p>
                      Viewing what went wrong as a learning opportunity is a good first step, but you also need a learning process. Just as hospitals, airlines, and other types of organizations use formalized after-event reviews to study what went wrong, you too can create a personal, scaled-down process to learn from the past.
                    </p>
                    <p>
                      After-event learning is quite limited if you base it on just your own recollections. You have to be willing to consider other inputs that add to, and even contradict, your inevitably limited interpretation. Remember, since the point of an after-event-review is to increase the odds you???ll do better next time, using it just to confirm your starting position is a waste of time. Ask others how they experienced what happened and what you could have done differently. If there???s audio or video or other types of objective evidence, study it carefully.
                    </p>
                  </div>
                  <div class=\"accordion-block__btn\">READ MORE</div>
                </div>
              </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class=\"navigation-item-block\">
            <div class=\"col\">
              <a href=\"#tab-3\" class=\"navigation-item navigation-item_prev\">
                <img class=\"navigation-item__icon\" src=\"../themes/custom/actadigitech/static/images/pages/start-journey/arrow-right-blue.svg\" alt=\"\">
                <span>Manage the Moment</span>
                <div class=\"navigation-item__direction\">previous</div>
              </a>
            </div>
            <div class=\"col\">
              <a href=\"/competent-courage-action-center/planning-your-courage-journey\" class=\"navigation-item navigation-item_next\">
                <div class=\"navigation-item__direction\">next</div>
                <span>Planning Your Courage Journey</span>
                <img class=\"navigation-item__icon\" src=\"../themes/custom/actadigitech/static/images/pages/start-journey/arrow-right-blue.svg\" alt=\"\">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "themes/custom/actadigitech/templates/component/intro_text/eck-entity--component--start-your-journey-intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  57 => 9,  53 => 8,  49 => 7,  46 => 6,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/actadigitech/templates/component/intro_text/eck-entity--component--start-your-journey-intro.html.twig", "/home/actadigitech/all-sites/jd2.jimdetert.com/web/themes/custom/actadigitech/templates/component/intro_text/eck-entity--component--start-your-journey-intro.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1);
        static $filters = array("escape" => 7, "raw" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'raw'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

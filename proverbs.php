<?php
    # Program: proverbs.php
    #    Date: 30-Oct-2025
    #  Author: gerry.walterscheid@gmail.com
    # Descrip: Randomly display a proverb and its meaning.

    session_start();
    header("Content-type: text/xml");

    $delay = 300;
    header("Refresh:$delay");

    $urlPath = "http://192.168.3.250/cisco/proverbs.php";

    $proverb = array(
        "A bad workman always blames his tools.",
        "When someone blames the quality of their equipment or other external factors when they perform a task poorly.",

        "A bird in hand is worth two in the bush.",
        "Things we already have are more valuable than what we hope to get.",

        "Absence makes the heart grow fonder.",
        "When people we love are not with us, we love them even more.",

        "A cat has nine lives.",
        "Cats can survive seemingly fatal events.",

        "A chain is only as strong as its weakest link.",
        "One weak part will render the whole assembly weak.",

        "Actions speak louder than words.",
        "Actions are a better reflection of character because it's easy to say things, but difficult to act on them and follow through.",

        "A drowning man will clutch on a straw.",
        "When someone is in a difficult situation, he will take any available opportunity to improve it.",

        "Adversity and loss make a man wise.",
        "We gain wisdom faster in difficult times than in prosperous times.",

        "A fool and his money are soon parted.",
        "Foolish people do not know how to hold on to their money.",

        "A journey of thousand miles begins with a single step.",
        "Howsoever big a task is, it starts with a small step.",

        "A leopard can't or doesn't change its spots.",
        "A person can't change their character, especially if bad.",

        "All good things come to an end.",
        "Good experiences eventually come to an end.",

        "All's well that ends well.",
        "As long as the outcome is good, problems along the way don't matter.",

        "All that glitters is not gold.",
        "Things that look good outwardly, may not be.",

        "All's fair in love and war.",
        "One can break the rules of fair play under extenuating circumstances.",

        "Always put your best foot forward.",
        "Try as hard as you can or give it your best shot.",

        "Among the blind the one-eyed man is king.",
        "An incapable person can gain powerful position if others in the fray are even more incapable.",

        "An apple a day keeps the doctor away.",
        "Eating an apple a day will keep you healthy.",

        "An empty vessel makes much noise.",
        "Foolish or stupid people are the most talkative.",

        "An idle brain is the devil's workshop.",
        "If you've nothing to do, you'll likely think of mischief.",

        "An ounce of protection is worth a pound of cure.",
        "A little precaution before a crisis hits is better than lot of firefighting afterwards.",

        "A picture is worth a thousand words.",
        "It is easier to show or explain something through a picture than through words.",

        "Appearances can be deceiving.",
        "Outward appearance may not be what you believe them to be.",

        "A rolling stone gathers no moss.",
        "A person who is always changing jobs and places has the advantage of less responsibilities, but also the disadvantage of no fixed place to live.",

        "A ship in the harbor is safe, but that is not what a ship is for.",
        "Get out of your comfort zone to grow and fulfill your potential.",

        "A stitch in time saves nine.",
        "It's better to deal with problems immediately rather than wait until they worsen and become much bigger.",

        "As you sow, so you shall reap.",
        "Your actions, good or bad, determine what you get.",

        "A thing begun is half done.",
        "A good beginning makes it easier to accomplish the rest of the project.",

        "Barking dogs seldom bite.",
        "People who appear threatening rarely do harm.",

        "Be slow in choosing, but slower in changing.",
        "Choose things or people after proper diligence, but once you choose, stick by your choice.",

        "Beauty is in the eye of the beholder.",
        "What may seem beautiful to one person may not be to another.",

        "Beauty is only skin deep.",
        "A person's character, intellect, and other inner qualities are more important than his or her physical beauty.",

        "Beggars can't be choosers.",
        "People who depend on the generosity of others shouldn't be picky, but accept what is given to them.",

        "The best things in life are free.",
        "The most valuable things are often free.",

        "Better late than never.",
        "It is better to get something you desire late, than never get it at all.",

        "Better to be poor and healthy than rich and sick.",
        "Good health is more important than money.",

        "Better to wear out than to rust out.",
        "It is better to remain active, than idle.",

        "Blood is thicker than water.",
        "Relationships with family (or blood relatives) are stronger than other relationships.",

        "Cleanliness is next to Godliness.",
        "Cleanliness is a sign of goodness, and is a great virtue.",

        "Clothes do not make the man.",
        "A person's character can't be judged by his clothing and outward appearance.",

        "Cowards die many times before their deaths.",
        "Cowards suffer the feared effects of death many times over in their lives.",

        "Cross the stream where it is shallowest.",
        "To do things in the easiest way possible.",

        "Curiosity killed the cat.",
        "Enquiring into others' work can be dangerous. You should mind your own business.",

        "Curses, like chickens, come home to roost.",
        "The consequences of doing wrong always catch up with the wrongdoer.",

        "Discretion is the better part of valor.",
        "It is wise to be careful and not show unnecessary bravery.",

        "Don't bite off more than you can chew.",
        "Don't take more responsibility than you can handle.",

        "Don't bite the hand that feeds you.",
        "Don't act badly toward the person who has helped you, or you will lose their help in the future.",

        "Don't blow your own trumpet.",
        "You should avoid proudly talking of your achievements and success in front of others.",

        "Don't cast pearls before swine.",
        "Don't offer something valuable to someone who doesn't know the value of it.",

        "Don't count your chickens before they hatch.",
        "Don't make plans based on future events that may never happen.",

        "Don't cross a bridge until you come to it.",
        "Deal with a situation when it happens and not unnecessarily worry about it in advance.",

        "Don't judge a book by its cover.",
        "Just like you can't form an opinion of a book just by looking at its cover, you can't form an opinion about someone (or something) from their outward appearances.",

        "Don't kill the goose that lays the golden eggs.",
        "If you kill a goose that lays golden eggs, you'll end up destroying something that could have made a lot of money for you.",

        "Don't put all your eggs in one basket.",
        "Don't put all your effort into a single course of action, venture, investment, goal, because if it doesnt work out, you lose everything.",

        "Don't put the cart before the horse.",
        "Do things in proper order. 'Horse before the cart' is the proper order, and not 'cart before the horse'.",

        "Don't throw the out baby with the bathwater.",
        "Don't discard something valuable while getting rid of something worthless.",

        "The early bird catches the worm.",
        "One who starts early on their work has higher chance of success.",

        "Easy come, easy go.",
        "You say this when you get something easily and then lose it just as easily.",

        "Empty bags cannot stand upright.",
        "A poor or hungry person cannot discharge his duties well.",

        "Every cloud has a silver lining.",
        "Every bad or negative situation can result with some benefit to you. (The presence of silver lining means that the sun is behind the cloud and will eventually emerge.)",

        "Every dog has his day.",
        "Even the unluckiest or the most unfortunate will taste success at some point.",

        "Every man is the architect of his destiny.",
        "Your own actions and decisions decide what you achieve (or don't) in life.",

        "Every man has his price.",
        "Anyone can be swayed to do something. Some may demand high price, and some low.",

        "Fall seven times. Stand up on the eighth.",
        "Be resilient and try despite failures. That's how you succeed.",

        "Familiarity breeds contempt.",
        "If you know a situation, person, or thing well, you stop respecting them and become careless.",

        "Fools rush in where angels fear to tread.",
        "Fools or inexperienced persons get involved in situations or pursue goals without much thought. In contrast, wise are thoughtful about such situations or goals.",

        "Fortune favors the brave.",
        "If you carry out your plans boldly, then luck is more likely to favor you.",

        "Get out while the going (getting) is good.",
        "To leave a place or situation before conditions worsen and it becomes difficult to leave.",

        "Give them an inch and they'll take a mile.",
        "If you give someone a small amount of power or freedom to do something, they may try to get a lot more.",

        "God helps those who help themselves.",
        "God doesn't help those who don't try. You have to make effort if you want to succeed.",

        "Good things come to those who wait.",
        "Patience is often rewarded.",

        "Grief divided is made lighter.",
        "If you share your grief, it'll get easier to bear.",

        "Half a loaf is better than none.",
        "Getting less than what one wants is better than not getting anything at all.",

        "Honesty is the best policy.",
        "It's always better to be truthful and honest, even if the opposite may get you the benefits.",

        "Hope for the best, prepare for the worst.",
        "Be optimistic, but be prepared for a scenario where things can go wrong.",

        "If it ain't broke, don't fix it.",
        "If something is working fine, don't change it unnecessarily.",

        "If the mountain won't come to Muhammad, Muhammad must go to the mountain.",
        "If things don't turn the way you want them to, then adjust your way to suit those things.",

        "If wishes were horses, beggars would ride.",
        "If things were to happen by just wishing them, even the poorest will have everything they want.",

        "If you can't beat them, join them.",
        "If you can't beat your opponent, then work alongside them for mutual benefit.",

        "If you play with fire, you'll get burned.",
        "If you do something dangerous or adventurous, you may get harmed.",

        "Ignorance is bliss.",
        "Those who do not know all the facts about a situation may be happier, but unaware of potential dangers too.",

        "It's better to be safe than sorry.",
        "It's better to be cautious than have regret later.",

        "It's easy to be wise after the event.",
        "It is easy to understand what you could have done to prevent something bad from happening after it had happened.",

        "It's never too late to mend.",
        "It's never too late to change your wrong ways or habits.",

        "It's not over till it's over.",
        "Till the event has completely played out, you still have a chance to succeed.",

        "It's no use crying over spilt milk.",
        "There is no point in staying upset over a mistake because you can't undo what has happened.",

        "It takes two to quarrel.",
        "An argument in a quarrel is not one person's fault.",

        "It takes two to tango.",
        "Where two parties are involved in a situation, fault usually lies with both when things go wrong. Rarely can one party be blamed entirely.",

        "Keep your mouth shut and your eyes open.",
        "Speak only when necessary and remain alert and observant the rest of the time.",

        "Laughter is the best medicine.",
        "Thinking positively and laughing will help you to feel better.",

        "Learn to walk before you run.",
        "Learn basic skills first before venturing into complex things.",

        "Let sleeping dogs lie.",
        "Don't talk about a bad situation people have long forgotten, since that could unnecessarily create problems in the present.",

        "Life begins at forty.",
        "A person truly starts enjoying life after forty as a result of accumulated skills and wisdom.",

        "Lightning never strikes twice in the same place.",
        "Misfortune does not occur twice in the same way to the same person.",

        "Look before you leap.",
        "Consider all consequences before taking an action, especially when you can't retract it.",

        "Make hay while the sun shines.",
        "Make the most of favorable conditions while they last.",

        "Money doesn't grow on trees.",
        "Spend money carefully because it's limited. You can't grow it on trees.",

        "Money talks.",
        "Money gives one power and influence.",

        "Necessity is the mother of invention.",
        "A need or problem forces people to come up with innovative solutions.",

        "Never put off until tomorrow what you can do today.",
        "Don't delay doing something if you can do it immediately.",

        "Never test the depth of water with both feet.",
        "If you're in water with both feet down, you risk being swept away by the currents. The message is: don't put all your eggs in the same basket. Think twice before placing all your bets and investments on one thing.",

        "No gain without pain.",
        "It is necessary to suffer or work hard in order to succeed or make progress.",

        "No news is good news.",
        "If you don't receive any news about someone or something, it means that everything is fine and going normally.",

        "Once bitten, twice shy.",
        "Someone won't do something a second time because they had bad experience the first time.",

        "One man's junk is another man's treasure.",
        "What may seem to be junk to one person maybe valuable to another.",

        "One shouldn't miss the forest for the trees.",
        "Sometimes you get so focused on small details that you may miss the larger context.",

        "Out of sight, out of mind.",
        "If someone or something is not seen for a long time, it'll be forgotten.",

        "The pen is mightier than sword.",
        "Thinking and writing have more influence on people and events than use of force.",

        "People who live in glass houses shouldn't throw stones.",
        "People who have faults should not criticize other people for having the same faults.",

        "Persuasion is better than force.",
        "You can achieve better results through persuasion than through coercion.",

        "Practice makes perfect.",
        "Doing something over and over makes one better at it.",

        "Practice what you preach.",
        "Behave the way you encourage other people to behave.",

        "Rome wasn't built in a day.",
        "Important work takes time to complete.",

        "Silence is half consent.",
        "If you don't object to what someone says or does, people will assume you agree to some extent.",

        "Slow and steady wins the race.",
        "Slow and consistent work leads to better chance of success than quick work in spurts.",

        "Still waters run deep.",
        "If a person doesn't speak much, it doesn't mean they lack depth or are uninteresting.",

        "Strike while the iron is hot.",
        "Take advantage of an opportunity as soon as it comes along.",

        "The best-laid plans go astray.",
        "Despite best preparations, things may not go your way.",

        "The end justifies the means.",
        "A desired result is so important that any method, even a morally bad one, may be used to achieve it.",

        "The harder you work, the luckier you get.",
        "The harder you work, the more good ideas and chances you may make for yourself.",

        "The grass is always greener on the other side.",
        "People are never satisfied with their own situation; they always think others have it better.",

        "The proof of the pudding is in the eating.",
        "You can only judge the quality of something after you have tried, used, or experienced it.",

        "There are more ways than one to skin a cat.",
        "There is more than one way to reach the same goal.",

        "There is no time like the present.",
        "The best time to do something is right now. So, act now.",

        "There is safety in numbers.",
        "A group offers more protection than when you are on your own.",

        "The road to hell is paved with good intentions.",
        "Good intentions do not matter if a person's actions lead to bad outcomes.",

        "The show must go on.",
        "A performance, event, etc., must continue even though there are problems.",

        "The squeaky wheel gets the grease.",
        "People who complain the most are the ones who get attention or what they want.",

        "Time and tide wait for no man.",
        "You've no control over passage of time. So don't procrastinate, or delay things.",

        "Too many cooks spoil the broth.",
        "When too many people work together on a project, the result is inferior.",

        "Two heads are better than one.",
        "Two persons have a better chance to solve a problem than one.",

        "Two wrongs don't make a right.",
        "You shouldn't harm a person who has harmed you, even if you think that person deserves it.",

        "Watch the doughnut, not the hole.",
        "Focus on what you have and not on what you don't.",

        "What goes around comes around.",
        "If someone treats other people badly, he or she will eventually be treated badly by someone else.",

        "When in Rome, do as the Romans do.",
        "When visiting a foreign land, follow the customs of local people.",

        "When the going gets tough, the tough get going.",
        "When conditions become difficult, strong people take action.",

        "Where there's a will, there's a way.",
        "If you are determined enough, you can find a way to achieve what you want, even if it is difficult.",

        "Where there's smoke, there's fire.",
        "If there are rumors or signs that something is true so it must be at least partly true.",

        "Where one door shuts, another opens.",
        "When you lose an opportunity to do one thing, an opportunity to do something else appears.",

        "While the cat's away, the mice will play.",
        "Without supervision, people will do as they please, especially in disregarding or breaking rules.",

        "You can catch more flies with honey than with vinegar.",
        "It's easier to win people to your side by persuasion and politeness than by confrontation and threats.",

        "You can lead a horse to water but you can't make it drink.",
        "You can show people the way to do things, but you can't force them to act.",

        "You can't always get what you want.",
        "Sometimes you may face disappointments in your pursuits or your wishes may not be fulfilled.",

        "You can't fit a round peg in a square hole.",
        "You can't force someone into a role for which s/he is not suited.",

        "You can't have your cake and eat it too.",
        "To have two things that one desires, but they're normally impossible to get simultaneously.",

        "You can't make an omelette without breaking some eggs.",
        "It is hard to achieve something important without causing unpleasant effects.",

        "You can't teach an old dog new tricks.",
        "People who have long been used to doing things in a particular way will not abandon their habits.",

        "You can't unscramble a scrambled egg.",
        "Some actions are irreversible.",

        "You can't win them all.",
        "It is not possible to succeed at everything you do.",

        "You show me the man and I'll show you the rule.",
        "Rules change depending on how influential or powerful the person likely to be affected by the rules is.");

    $count = 149;                           # Number of proverbs.

    function FisherYatesIndex($n) {

        # Create array of n elements containing indexes.
        $arr = [];

        for ($i = 0; $i < $n; $i++)
            $arr[$i] = $i;

        # Perform index shuffle.    
        for($i = $n - 1; $i > 0; $i--) {
            $r = rand(0, $i); $tmp = $arr[$i];
            $arr[$i] = $arr[$r];
            $arr[$r] = $tmp; }

        return $arr; }

    # Recall prior variable state
    $id = $_SESSION['id'];                  # App name.

    # Prevent data corruption to next application.
    if ($id == "proverbs") {
        $lastCmd = $_SESSION['cmd'];        # User command.
        $mode = $_SESSION['mode'] + 0;      # Current mode.
        $ndx = $_SESSION['ndx'] + 0;        # Current index.
        $rndNdx = $_SESSION['rndNdx'];      # Random index.
        $update = $_SESSION['update']; }    # Time from prior page update.
    else {
        $mode = 0;
        $ndx = 0; 
        $rndNdx = FisherYatesIndex($count); 
        $update = 0; }

    # Get SoftKey selection.
    $cmd = $_GET['key'] ?? 0;

    # Check page refresh delay.
    if (time() - $update < $delay)

        # Process user request based on the key pressed.	
        switch($cmd) {

        case 1 : # mode
            $mode = ++$mode % 2;
            break;

        case 2 : # previous
            $ndx = (--$ndx + $count) % $count;
            $mode = 0;
            break;

        case 3 : # next
            $ndx = ++$ndx % $count;
            $mode = 0;
			break;

        } else {
        # Advance to next item after page refresh delay.
        $ndx = ++$ndx % $count;
        $mode = 0; }

    # Update the indexes on both fields.
    $i = $rndNdx[$ndx] * 2;
    $j = $i + 1;

    switch($mode) {

    case 0 : # Proverb
        echo "<CiscoIPPhoneText>\n";
        echo "  <Title>Daily Proverb</Title>\n";
        echo "  <Text>$proverb[$i]</Text>\n";

        $label = "More";
        $msg = "";
        break;

    case 1 : # Example
        echo "<CiscoIPPhoneText>\n";
        echo "  <Title>Daily Proverb - Reason</Title>\n";
        echo "  <Text>$proverb[$j]</Text>\n";

        $label = "Back";
        $msg = "Use arrows to view all text.";
        break;
    }

    echo "  <SoftKeyItem>\n";
    echo "    <Name>$label</Name>\n";
    echo "    <URL>$urlPath?key=1</URL>\n";
    echo "    <Position>1</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <SoftKeyItem>\n";
    echo "    <Name>Prev</Name>\n";
    echo "    <URL>$urlPath?key=2</URL>\n";
    echo "    <Position>2</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <SoftKeyItem>\n";
    echo "    <Name>Next</Name>\n";
    echo "    <URL>$urlPath?key=3</URL>\n";
    echo "    <Position>3</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <SoftKeyItem>\n";
    echo "    <Name>Exit</Name>\n";
    echo "    <URL>SoftKey:Exit</URL>\n";
    echo "    <Position>4</Position>\n";
    echo "  </SoftKeyItem>\n";

    echo "  <Prompt>$msg</Prompt>\n";
    echo "</CiscoIPPhoneText>";

    # Save current variable state.
    $_SESSION['id'] = "proverbs";
    $_SESSION['cmd'] = $cmd;
    $_SESSION['mode'] = $mode;
    $_SESSION['ndx'] = $ndx;
    $_SESSION['rndNdx'] = $rndNdx;
    $_SESSION['update'] = time();
?>

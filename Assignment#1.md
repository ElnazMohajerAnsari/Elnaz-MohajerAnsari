Question 1:

1)
> git init
Initialized empty Git repository in C:/Users/Refresh_Pc/BIHE_Web_Programming/git-repo/.git/


2)
> echo Hello World! > test.txt

> git add test.txt

> git commit -m "first commit"
[master (root-commit) 2a86bc4] first commit
 1 file changed, 1 insertion(+)
 create mode 100644 test.txt
 
 
3)
> tree .git
Folder PATH listing for volume Win 10 Pro
Volume serial number is 4E50-B07B
C:\USERS\REFRESH_PC\BIHE_WEB_PROGRAMMING\GIT-REPO\.GIT
├───hooks
├───info
├───logs
│   └───refs
│       └───heads
├───objects
│   ├───2a
│   ├───36
│   ├───41
│   ├───info
│   └───pack
└───refs
    ├───heads
    └───tags


4)
> git cat-file -t 36f0fc755f90a07a5ccc557487459886abd57309
tree
> git cat-file -p 36f0fc755f90a07a5ccc557487459886abd57309
100644 blob 4110295ca67d265b328d87a764601115dcc6d2c0    test.txt

> git cat-file -t 4110295ca67d265b328d87a764601115dcc6d2c0
blob
> git cat-file -p 4110295ca67d265b328d87a764601115dcc6d2c0
Hello World!

> git cat-file -t 2a86bc4cd11cbce8380fc4b1a8bbf58667ae4503
commit
> git cat-file -p 2a86bc4cd11cbce8380fc4b1a8bbf58667ae4503
tree 36f0fc755f90a07a5ccc557487459886abd57309
author Elnaz MohajerAnsari <elnazmohajeransari@gmail.com> 1650114782 +0430
committer Elnaz MohajerAnsari <elnazmohajeransari@gmail.com> 1650114782 +0430

first commit


5)
.git/HEAD --> ref: refs/heads/master
.git/refs/heads/master --> 2a86bc4cd11cbce8380fc4b1a8bbf58667ae4503

------------------------------------------------------------------------------------------------------

Question 2:

> git clone https://github.com/idin-khayami/git-exercises.git
Cloning into 'git-exercises'...
remote: Enumerating objects: 9, done.
remote: Counting objects: 100% (9/9), done.
remote: Compressing objects: 100% (5/5), done.
remote: Total 9 (delta 1), reused 8 (delta 0), pack-reused 0
Receiving objects: 100% (9/9), done.
Resolving deltas: 100% (1/1), done.

> cd .\git-exercises\
> git checkout question2
Switched to a new branch 'question2'
branch 'question2' set up to track 'origin/question2'.

1)
> git ls-files -s
100644 980a0d5f19a64b4b30a87d4206aade58726b60e3 0       hello.txt


2)
"a Change to this file"
> git add -p
diff --git a/hello.txt b/hello.txt
index 980a0d5..1966876 100644
--- a/hello.txt
+++ b/hello.txt
@@ -1 +1,2 @@
 Hello World!
+a Change to this file
(1/1) Stage this hunk [y,n,q,a,d,e,?]? y


3)
> git reset
Unstaged changes after reset:
M       hello.txt


4)
> git stash save "a message for my stash"
Saved working directory and index state On question2: a message for my stash

> git stash list
stash@{0}: On question2: a message for my stash

> git stash apply "stash@{0}"
On branch question2
Your branch is up to date with 'origin/question2'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git restore <file>..." to discard changes in working directory)
        modified:   hello.txt

no changes added to commit (use "git add" and/or "git commit -a")
  
> git add .\hello.txt
  
> git commit -m "extending hello.txt"
[question2 ca2b179] extending hello.txt
 1 file changed, 1 insertion(+)
 
------------------------------------------------------------------------------------------------------

Question 3:
  
> git checkout question3
Switched to a new branch 'question3'
branch 'question3' set up to track 'origin/question3'.

1)
> ref: refs/heads/question3


2)
> git show-ref
84f33bb71faa62192b2362ad0ef66fb7d972e447 refs/heads/master
ca2b179271e9bab6fbad70d459f929e20f381df6 refs/heads/question2
19f9daed9feb5c5e5ee8149f9677505af7bec379 refs/heads/question3
84f33bb71faa62192b2362ad0ef66fb7d972e447 refs/remotes/origin/HEAD
84f33bb71faa62192b2362ad0ef66fb7d972e447 refs/remotes/origin/master
84f33bb71faa62192b2362ad0ef66fb7d972e447 refs/remotes/origin/question2
19f9daed9feb5c5e5ee8149f9677505af7bec379 refs/remotes/origin/question3
84f33bb71faa62192b2362ad0ef66fb7d972e447 refs/remotes/origin/question4
87cba9c704760c7922a5a07ad3cbe7d6ccbd245e refs/remotes/origin/question5
32363e6eb5849286e23af01ca70edfaf11d7d4e0 refs/stash


3)
> git tag lightweight-tag

> git show lightweight-tag
commit 19f9daed9feb5c5e5ee8149f9677505af7bec379 (HEAD -> question3, tag: lightweight-tag, origin/question3)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:31:10 2022 +0430

    add update for question 3

diff --git a/hello.txt b/hello.txt
index 980a0d5..b31a35b 100644
--- a/hello.txt
+++ b/hello.txt
@@ -1 +1,2 @@
 Hello World!
+This is a test of the emergency git-casting system.


4)
> git tag -a annotated-tag -m "my first annotated tag"

> git show annotated-tag
> tag annotated-tag
Tagger: Elnaz MohajerAnsari <elnazmohajeransari@gmail.com>
Date:   Sat Apr 16 12:45:29 2022 +0430

my first annotated tag

commit 19f9daed9feb5c5e5ee8149f9677505af7bec379 (HEAD -> question3, tag: lightweight-tag, tag: annotated-tag, origin/question3)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:31:10 2022 +0430

    add update for question 3

diff --git a/hello.txt b/hello.txt
index 980a0d5..b31a35b 100644
--- a/hello.txt
+++ b/hello.txt
@@ -1 +1,2 @@
 Hello World!
+This is a test of the emergency git-casting system.


5)
> git checkout 19f9daed9feb5c5e5ee8149f9677505af7bec379
Note: switching to '19f9daed9feb5c5e5ee8149f9677505af7bec379'.

You are in 'detached HEAD' state. You can look around, make experimental
changes and commit them, and you can discard any commits you make in this
state without impacting any branches by switching back to a branch.

If you want to create a new branch to retain commits you create, you may
do so (now or later) by using -c with the switch command. Example:

  git switch -c <new-branch-name>

Or undo this operation with:

  git switch -

Turn off this advice by setting config variable advice.detachedHead to false

HEAD is now at 19f9dae add update for question 3
 

6)
"new commit"

> git add *

> git commit -m "new commit"
[detached HEAD c291678] new commit
 1 file changed, 1 insertion(+)
 
> git checkout question3
Warning: you are leaving 1 commit behind, not connected to
any of your branches:

  c291678 new commit

If you want to keep it by creating a new branch, this may be a good time
to do so with:

 git branch <new-branch-name> c291678

Switched to branch 'question3'
Your branch is ahead of 'origin/question3' by 1 commit.
  (use "git push" to publish your local commits)
 
------------------------------------------------------------------------------------------------------

Question 4:

> git checkout question4
Switched to a new branch 'question4'
branch 'question4' set up to track 'origin/question4'.

1)
> git merge question3
Updating 84f33bb..b94e2db
Fast-forward
 hello.txt | 2 ++
 1 file changed, 2 insertions(+)

> git log
commit b94e2dbce82d7d53872309efd4de7f0ca7863c4e (HEAD -> question4, question3)
Author: Elnaz MohajerAnsari <elnazmohajeransari@gmail.com>
Date:   Sat Apr 16 13:42:28 2022 +0430

    new commit

commit 19f9daed9feb5c5e5ee8149f9677505af7bec379 (tag: lightweight-tag, tag: annotated-tag, origin/question3)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:31:10 2022 +0430

    add update for question 3

commit 84f33bb71faa62192b2362ad0ef66fb7d972e447 (origin/question4, origin/question2, origin/master, origin/HEAD, master)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:26:47 2022 +0430

    initial commit

 
2)
> git reset --hard HEAD^
HEAD is now at 19f9dae add update for question 3

> git merge --no-ff
Already up to date.

> git log
commit 19f9daed9feb5c5e5ee8149f9677505af7bec379 (HEAD -> question4, tag: lightweight-tag, tag: annotated-tag, origin/question3)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:31:10 2022 +0430

    add update for question 3

commit 84f33bb71faa62192b2362ad0ef66fb7d972e447 (origin/question4, origin/question2, origin/master, origin/HEAD, master)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:26:47 2022 +0430

    initial commit

 
3)

------------------------------------------------------------------------------------------------------

Question 5:

> git checkout question5
Switched to a new branch 'question5'
branch 'question5' set up to track 'origin/question5'.

1)
> git add *
 
> git commit -m "Q5 first commit"
[question5 c20b47b] Q5 first commit
 1 file changed, 2 insertions(+), 1 deletion(-)

 
2)
> git log
commit c20b47b4b54271b11ee4d40058bdd588d62514bb (HEAD -> question5)
Author: Elnaz MohajerAnsari <elnazmohajeransari@gmail.com>
Date:   Sat Apr 16 18:21:28 2022 +0430

    Q5 first commit

commit 87cba9c704760c7922a5a07ad3cbe7d6ccbd245e (origin/question5)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:35:47 2022 +0430

    add update for question 5

commit 84f33bb71faa62192b2362ad0ef66fb7d972e447 (origin/question4, origin/question2, origin/master, origin/HEAD, master)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:26:47 2022 +0430

    initial commit


"hello.txt --> world.txt"
> git add *
 
> git commit -m "Rename the file"
[question5 edaacb2] Rename the file
 1 file changed, 0 insertions(+), 0 deletions(-)
 rename hello.txt => world.txt (100%)

 
> git log --name-status
commit edaacb2f30a9240ab3d2418d7e02322304387bbd (HEAD -> question5)
Author: Elnaz MohajerAnsari <elnazmohajeransari@gmail.com>
Date:   Sat Apr 16 18:40:53 2022 +0430

    Rename the file

R100    hello.txt       world.txt

commit c20b47b4b54271b11ee4d40058bdd588d62514bb
Author: Elnaz MohajerAnsari <elnazmohajeransari@gmail.com>
Date:   Sat Apr 16 18:21:28 2022 +0430

    Q5 first commit

M       hello.txt

commit 87cba9c704760c7922a5a07ad3cbe7d6ccbd245e (origin/question5)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:35:47 2022 +0430

    add update for question 5

M       hello.txt

commit 84f33bb71faa62192b2362ad0ef66fb7d972e447 (origin/question4, origin/question2, origin/master, origin/HEAD, master)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:26:47 2022 +0430

    initial commit

A       hello.txt


> git log --follow world.txt
commit edaacb2f30a9240ab3d2418d7e02322304387bbd (HEAD -> question5)
Author: Elnaz MohajerAnsari <elnazmohajeransari@gmail.com>
Date:   Sat Apr 16 18:40:53 2022 +0430

    Rename the file

commit c20b47b4b54271b11ee4d40058bdd588d62514bb
Author: Elnaz MohajerAnsari <elnazmohajeransari@gmail.com>
Date:   Sat Apr 16 18:21:28 2022 +0430

    Q5 first commit

commit 87cba9c704760c7922a5a07ad3cbe7d6ccbd245e (origin/question5)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:35:47 2022 +0430

    add update for question 5

commit 84f33bb71faa62192b2362ad0ef66fb7d972e447 (origin/question4, origin/question2, origin/master, origin/HEAD, master)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:26:47 2022 +0430

    initial commit


> git log --grep "first"
commit c20b47b4b54271b11ee4d40058bdd588d62514bb
Author: Elnaz MohajerAnsari <elnazmohajeransari@gmail.com>
Date:   Sat Apr 16 18:21:28 2022 +0430

    Q5 first commit


> git log --diff-filter=RM
commit edaacb2f30a9240ab3d2418d7e02322304387bbd (HEAD -> question5)
Author: Elnaz MohajerAnsari <elnazmohajeransari@gmail.com>
Date:   Sat Apr 16 18:40:53 2022 +0430

    Rename the file

commit c20b47b4b54271b11ee4d40058bdd588d62514bb
Author: Elnaz MohajerAnsari <elnazmohajeransari@gmail.com>
Date:   Sat Apr 16 18:21:28 2022 +0430

    Q5 first commit

commit 87cba9c704760c7922a5a07ad3cbe7d6ccbd245e (origin/question5)
Author: Idin Khayami <idin.khanoom.khayami@gmail.com>
Date:   Thu Apr 7 16:35:47 2022 +0430

    add update for question 5


3)
> git show 906e42c773172d110db25abde9503d4ccbdf3ffb
tree 906e42c773172d110db25abde9503d4ccbdf3ffb

hello.txt


4) 
> git branch --merged
  master
* question5

> git branch --no-merged
  question2
  question3
  question4



